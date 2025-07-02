<?php
require_once __DIR__ . '/../helpers.php';

$pdo = getPDO();

function generateTable($pdo) {
    $query = "SELECT * FROM tyres";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $html = "<div class=\"manufacturer-section\" id=\"\">\n";
    $html .= "    <h3>Колеса Ormond широко применяются в подъемно-погрузочной и дорожно-строительной технике, аэропортового оборудования и портовых перегружателей</h3>\n";
    $html .= "    <div class=\"table-responsive\">\n";
    $html .= "        <table class=\"table table-hover\">\n";
    $html .= "            <thead>\n";
    $html .= "                <tr>\n";
    $html .= "                    <th>Типоразмер</th>\n";
    $html .= "                    <th>Размер диска</th>\n";
    $html .= "                    <th>Характеристики</th>\n";
    $html .= "                    <th>Цена</th>\n";
    $html .= "                    <th></th>\n";
    $html .= "                </tr>\n";
    $html .= "            </thead>\n";
    $html .= "            <tbody>\n";

    foreach ($results as $row) {
        $html .= "                <tr>\n";
        $html .= "                    <td>{$row['size']}</td>\n";
        $html .= "                    <td>{$row['size_rim']}</td>\n";
        $html .= "                    <td>{$row['name']}</td>\n";
        $html .= "                    <td>По запросу</td>\n";
        $html .= "                    <td>\n";
        $html .= "                        <button class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#requestModal\" data-article=\"{$row['size']}\">\n";
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
$htmlCode = generateTable($pdo);
file_put_contents("tyres.html", $htmlCode);
echo "Generated table for tyres";
?>
