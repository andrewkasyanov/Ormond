<?php
require_once __DIR__ . '/../src/helpers.php'; // Подключаем ваши хелперы
$pdo = getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secretKey = '6LdQcW4rAAAAAOUsGaRYFyBywEBjq4OSfm4NMZve';
    $recaptchaResponse = $_POST['recaptcha_token'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $json = json_decode($result);

    if ($json->success) {
        // Проверка пройдена, обрабатываем форму
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'] ?? '';
        $message = $_POST['message'];
        
        // Генерация номера запроса (аналогично вашей логике)
        $stmt = $pdo->query("SELECT MAX(CAST(SUBSTRING(request_number, 3) AS UNSIGNED)) AS max_number FROM contact_requests");
        $maxNumber = $stmt->fetchColumn();
        $nextNumber = $maxNumber ? $maxNumber + 1 : 155;
        $requestNumber = 'OR' . str_pad($nextNumber, 6, '0', STR_PAD_LEFT);

        // Сохранение в базу данных
        $stmt = $pdo->prepare("INSERT INTO contact_requests (name, email, phone, message, date, request_number) VALUES (?, ?, ?, ?, NOW(), ?)");
        $stmt->execute([$name, $email, $phone, $message, $requestNumber]);

        // Отправка email администратору
        $adminEmail = 'client@reach-stacker-parts.ru';
        $subject = 'Новое сообщение с сайта, №' . $requestNumber;
        $emailBody = "
            <h3>Новое сообщение с сайта</h3>
            <p><strong>Номер запроса:</strong> $requestNumber</p>
            <p><strong>Имя:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Телефон:</strong> " . ($phone ?: 'не указан') . "</p>
            <p><strong>Сообщение:</strong></p>
            <div style='border:1px solid #eee; padding:10px; margin:10px 0;'>$message</div>
        ";
        
        sendEmail($adminEmail, $subject, $emailBody);
        
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['success' => true, 'message' => 'Сообщение успешно отправлено!']);
        exit;
    } else {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['success' => false, 'message' => 'Ошибка проверки reCAPTCHA']);
        exit;
    }
} else {
    http_response_code(405);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Метод не разрешен']);
    exit;
}