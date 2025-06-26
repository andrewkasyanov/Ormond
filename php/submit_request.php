<?php
require_once __DIR__ . '/../src/helpers.php';
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
        $name = $_POST['name'];
        $company = $_POST['company'] ?? '';
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $comments = $_POST['comments'] ?? '';
        
        $articles = $_POST['article'];
        $quantities = $_POST['quantity'];
        
        // Генерация номера запроса
        $stmt = $pdo->query("SELECT MAX(CAST(SUBSTRING(request_number, 3) AS UNSIGNED)) AS max_number FROM price_requests");
        $maxNumber = $stmt->fetchColumn();
        $nextNumber = $maxNumber ? $maxNumber + 1 : 155;
        $requestNumber = 'OR' . str_pad($nextNumber, 6, '0', STR_PAD_LEFT);

        // Сохранение основного запроса
        $stmt = $pdo->prepare("INSERT INTO price_requests (name, company, phone, email, comments, date, request_number) VALUES (?, ?, ?, ?, ?, NOW(), ?)");
        $stmt->execute([$name, $company, $phone, $email, $comments, $requestNumber]);
        $requestId = $pdo->lastInsertId();
        
        // Сохранение позиций
        $stmtItems = $pdo->prepare("INSERT INTO price_request_items (request_id, article, quantity) VALUES (?, ?, ?)");
        
        foreach ($articles as $index => $article) {
            if (!empty($article) && isset($quantities[$index])) {
                $quantity = (int)$quantities[$index];
                $stmtItems->execute([$requestId, $article, $quantity]);
            }
        }
        
        // Отправка email клиенту
        $clientSubject = 'Ваш запрос цен, №' . $requestNumber;
        $clientBody = "
            <h3>Ваш запрос цен принят</h3>
            <p><strong>Номер запроса:</strong> $requestNumber</p>
            <p>В ближайшее время с вами свяжутся наши специалисты.</p>
            <h4>Детали запроса:</h4>
            <ul>
        ";
        
        foreach ($articles as $index => $article) {
            if (!empty($article) && isset($quantities[$index])) {
                $quantity = $quantities[$index];
                $clientBody .= "<li>$article (кол-во: $quantity)</li>";
            }
        }
        
        $clientBody .= "</ul>";
        
        sendEmail($email, $clientSubject, $clientBody);
        
        // Отправка email администратору
        $adminSubject = 'Новый запрос цен, №' . $requestNumber;
        $adminBody = "
            <h3>Новый запрос цен</h3>
            <p><strong>Номер:</strong> $requestNumber</p>
            <p><strong>Имя:</strong> $name</p>
            <p><strong>Компания:</strong> " . ($company ?: 'не указана') . "</p>
            <p><strong>Телефон:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Комментарий:</strong> " . ($comments ?: 'нет') . "</p>
            <h4>Запрашиваемые позиции:</h4>
            <ul>
        ";
        
        foreach ($articles as $index => $article) {
            if (!empty($article) && isset($quantities[$index])) {
                $quantity = $quantities[$index];
                $adminBody .= "<li>$article (кол-во: $quantity)</li>";
            }
        }
        
        $adminBody .= "</ul>";
        
        sendEmail('client@reach-stacker-parts.ru', $adminSubject, $adminBody);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['success' => true, 'requestNumber' => $requestNumber]);
        exit; // Важно завершить выполнение
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