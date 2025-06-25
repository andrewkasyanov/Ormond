<?php
require_once __DIR__ . '/../helpers.php';

$pdo = getPDO();

function generateTable($pdo, $manufacturer) {
    $query = "SELECT * FROM price WHERE col_3 = :manufacturer AND name_part LIKE '%Колесо%'";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['manufacturer' => $manufacturer]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $html = "<div class=\"manufacturer-section\" id=\"$manufacturer\">\n";
    $html .= "    <h3>$manufacturer</h3>\n";
    $html .= "    <div class=\"table-responsive\">\n";
    $html .= "        <table class=\"table table-hover\">\n";
    $html .= "            <thead>\n";
    $html .= "                <tr>\n";
    $html .= "                    <th>Артикул</th>\n";
    $html .= "                    <th>Наименование</th>\n";
    $html .= "                    <th>Тип</th>\n";
    $html .= "                    <th>Твердость по Шору</th>\n";
    $html .= "                    <th>Цена</th>\n";
    $html .= "                    <th></th>\n";
    $html .= "                </tr>\n";
    $html .= "            </thead>\n";
    $html .= "            <tbody>\n";

    foreach ($results as $row) {
        $html .= "                <tr>\n";
        $html .= "                    <td><a href=\"#\" data-search=\"{$row['art_part']}\">{$row['art_part']}</a></td>\n";
        $html .= "                    <td>{$row['name_part']}</td>\n";
        $html .= "                    <td>Полиуретан</td>\n";
        $html .= "                    <td>95А</td>\n";
        $html .= "                    <td>По запросу</td>\n";
        $html .= "                    <td>\n";
        $html .= "                        <button class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#requestModal\" data-article=\"{$row['art_part']}\">\n";
        $html .= "                            <i class=\"fas fa-envelope me-1\"></i> Запросить\n";
        $html .= "                        </button>\n";
        $html .= "                    </td>\n";
        $html .= "                </tr>\n";
    }

    $html .= "            </tbody>\n";
    $html .= "        </table>\n";
    $html .= "    </div>\n";
    $html .= "</div>\n";

    return $html;
}

$pdo = getPDO();
$manufacturers = ['Crown', 'Yale'];

foreach ($manufacturers as $manufacturer) {
    $htmlCode = generateTable($pdo, $manufacturer);
    file_put_contents("$manufacturer.html", $htmlCode);
    echo "Generated table for $manufacturer\n";
}
?>
