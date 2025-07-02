<?php

require_once __DIR__ . '/config.php';

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function getHysterTable () {
    echo '
    <tr>
        <td><a href="#" data-search="14684817">14684817</a></td>
        <td>Колесо опорное 125х50</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="14684817">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1491574">1491574</a></td>
        <td>Колесо грузовое 230х75</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1491574">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1499031">1499031</a></td>
        <td>Колесо грузовое 250х100</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1499031">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1499032">1499032</a></td>
        <td>Колесо грузовое 285х100</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1499032">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1499033">1499033</a></td>
        <td>Колесо грузовое 350х100</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1499033">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1530185">1530185</a></td>
        <td>Колесо подвилочное 85x74.3-20.1</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1530185">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1530186">1530186</a></td>
        <td>Колесо подвилочное 84х95</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1530186">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1531785">1531785</a></td>
        <td>Колесо подвилочное 84х66</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1531785">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1532113">1532113</a></td>
        <td>Колесо грузовое 230х75</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1532113">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1570483">1570483</a></td>
        <td>Колесо грузовое 254x90</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1570483">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1590995">1590995</a></td>
        <td>Колесо подвилочное 85х90/95-13</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1590995">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1590996">1590996</a></td>
        <td>Колесо подвилочное 85х110</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1590996">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1599508">1599508</a></td>
        <td>Колесо опорное 125х90</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1599508">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1600351">1600351</a></td>
        <td>Колесо грузовое 200х55</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1600351">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1622768">1622768</a></td>
        <td>Колесо грузовое 200х100</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1622768">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1643642">1643642</a></td>
        <td>Колесо ведущее 340х140</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1643642">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="1694817">1694817</a></td>
        <td>Колесо опорное 150x55/60-20</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1694817">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2047200">2047200</a></td>
        <td>Колесо опорное 100х40</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2047200">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2066239">2066239</a></td>
        <td>Колесо опорное 128х73</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2066239">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2086326">2086326</a></td>
        <td>Колесо опорное 127х102</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2086326">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2086327">2086327</a></td>
        <td>Колесо опорное 152.4х102</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2086327">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="249946">249946</a></td>
        <td>Колесо грузовое 230х70</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="249946">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2770500">2770500</a></td>
        <td>Колесо ведущее 230х75</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2770500">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2790782">2790782</a></td>
        <td>Колесо опорное 150х50</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2790782">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="2791988">2791988</a></td>
        <td>Колесо подвилочное 85х70</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="2791988">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="29903814">29903814</a></td>
        <td>Колесо ведущее 343х135</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="29903814">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="31102129">31102129</a></td>
        <td>Колесо опорное 140х55</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="31102129">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="4021574">4021574</a></td>
        <td>Колесо грузовое 285x100</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4021574">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="4021577">4021577</a></td>
        <td>Колесо опорное 285х140</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4021577">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="4031924">4031924</a></td>
        <td>Колесо ведущее 343x140</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4031924">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="4131943">4131943</a></td>
        <td>Колесо подвилочное 85х110</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4131943">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="4616703">4616703</a></td>
        <td>Колесо подвилочное 83х165</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4616703">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="501211">501211</a></td>
        <td>Колесо опорное 100х50</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="501211">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="580052985">580052985</a></td>
        <td>Колесо ведущее 254х90</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580052985">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="580120">580120</a></td>
        <td>Колесо грузовое 230х70</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580120">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="582034871">582034871</a></td>
        <td>Колесо грузовое 230х70</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="582034871">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="5880062231">5880062231</a></td>
        <td>Колесо опорное 125х50</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="5880062231">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="9933800">9933800</a></td>
        <td>Колесо опорное 100х40</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9933800">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="HCCH04006">HCCH04006</a></td>
        <td>Колесо опорное 127х57</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="HCCH04006">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="HCCH4117">HCCH4117</a></td>
        <td>Колесо грузовое 250х80</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="HCCH4117">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="HCCH4560">HCCH4560</a></td>
        <td>Колесо опорное 150х62</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="HCCH4560">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="HYT004390">HYT004390</a></td>
        <td>Колесо опорное 125х55</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="HYT004390">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="HYT004428">HYT004428</a></td>
        <td>Колесо опорное 140х50</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="HYT004428">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    <tr>
        <td><a href="#" data-search="XCCH05388">XCCH05388</a></td>
        <td>Колесо подвилочное 78х98</td>
        <td>Полиуретан</td>
        <td>95А</td>
        <td>По запросу</td>
        <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="XCCH05388">
                <i class="fas fa-envelope me-1"></i> Запросить
            </button>
        </td>
    </tr>
    ';
}

function getJHTable () {
    echo '
    <tr>
                    <td><a href="#" data-search="16219940">16219940</a></td>
                    <td>Колесо ведущее 230х82/185-45-8Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="16219940">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="27631340">27631340</a></td>
                    <td>Колесо подвилочное 85х110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="27631340">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="27631380">27631380</a></td>
                    <td>Колесо подвилочное 85х80/25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="27631380">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50010588">50010588</a></td>
                    <td>Колесо подвилочное 85х85</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50010588">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50016429">50016429</a></td>
                    <td>Колесо подвилочное 85х85</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50016429">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50019777">50019777</a></td>
                    <td>Колесо опорное 140х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50019777">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50023635">50023635</a></td>
                    <td>Колесо грузовое 230х65</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50023635">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="50047415">50047415</a></td>
                    <td>Колесо грузовое 310х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50047415">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50056035">50056035</a></td>
                    <td>Колесо опорное 140х54/60-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50056035">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50168852">50168852</a></td>
                    <td>Колесо грузовое 295х144</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50168852">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50262633">50262633</a></td>
                    <td>Колесо ведущее 343x114-90-7H-18.5</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50262633">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50303244">50303244</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50303244">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="50303847">50303847</a></td>
                    <td>Колесо опорное 100х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50303847">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50307456">50307456</a></td>
                    <td>Колесо грузовое 85х85/90-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50307456">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50307483">50307483</a></td>
                    <td>Колесо подвилочное 85x110/115-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50307483">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50312941">50312941</a></td>
                    <td>Колесо опорное 140х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50312941">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50432338">50432338</a></td>
                    <td>Колесо грузовое 355х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50432338">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50432647">50432647</a></td>
                    <td>Колесо опорное 140x54/60-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50432647">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50440837">50440837</a></td>
                    <td>Колесо подвилочное 82x70/74-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50440837">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50447030">50447030</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50447030">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50452737">50452737</a></td>
                    <td>Колесо подвилочное 85x100/105-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50452737">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50460100">50460100</a></td>
                    <td>Колесо ведущее 230х70/82-45-5Н+3Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50460100">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50460101">50460101</a></td>
                    <td>Колесо ведущее 230x70/82-45-5H+3H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50460101">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50460103">50460103</a></td>
                    <td>Колесо грузовое 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50460103">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51041341">51041341</a></td>
                    <td>Колесо подвилочное 85х110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51041341">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51048458">51048458</a></td>
                    <td>Колесо ведущее 230х83</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51048458">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51056244">51056244</a></td>
                    <td>Колесо опорное 180x65/75-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51056244">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51058754">51058754</a></td>
                    <td>Колесо опорное 100x40-15</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51058754">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51064609">51064609</a></td>
                    <td>Колесо подвилочное 85х110/115-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51064609">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51065118">51065118</a></td>
                    <td>Колесо подвилочное 85x75-80-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51065118">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51065641">51065641</a></td>
                    <td>Колесо опорное 140x54/60-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51065641">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51072877">51072877</a></td>
                    <td>Колесо грузовое 355х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51072877">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51077213">51077213</a></td>
                    <td>Колесо опорное 125х50-102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51077213">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51077215">51077215</a></td>
                    <td>Колесо опорное 125х54/60-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51077215">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51078774">51078774</a></td>
                    <td>Колесо ведущее 285x100-40-9H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51078774">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51078776">51078776</a></td>
                    <td>Колесо грузовое 285x100-40-3Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51078776">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51107126">51107126</a></td>
                    <td>Колесо грузовое 150х130</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51107126">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="51112013">51112013</a></td>
                    <td>Колесо грузовое 355х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51112013">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51112017">51112017</a></td>
                    <td>Колесо грузовое 355х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51112017">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51115430">51115430</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51115430">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>               
                
                <tr>
                    <td><a href="#" data-search="51160625">51160625</a></td>
                    <td>Колесо грузовое 285x100-40-3Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51160625">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51239395">51239395</a></td>
                    <td>Колесо опорное 150х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51239395">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51308416">51308416</a></td>
                    <td>Колесо опорное 127х73</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51308416">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51308417">51308417</a></td>
                    <td>Колесо опорное 127х92</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51308417">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51327423">51327423</a></td>
                    <td>Колесо грузовое 342х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51327423">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51331328">51331328</a></td>
                    <td>Колесо ведущее 343х114</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51331328">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51331334">51331334</a></td>
                    <td>Колесо ведущее 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51331334">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51331336">51331336</a></td>
                    <td>Колесо грузовое 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51331336">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51331358">51331358</a></td>
                    <td>Колесо грузовое 343х114</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51331358">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51334553">51334553</a></td>
                    <td>Колесо грузовое 380х192</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51334553">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="51367028">51367028</a></td>
                    <td>Колесо опорное 180х65</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51367028">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51408011">51408011</a></td>
                    <td>Колесо подвилочное 85x110/115-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51408011">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51427796">51427796</a></td>
                    <td>Колесо грузовое 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51427796">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="51522281">51522281</a></td>
                    <td>Колесо опорное 140x57</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51522281">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51535381">51535381</a></td>
                    <td>Колесо грузовое 230х65</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51535381">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="51587409">51587409</a></td>
                    <td>Колесо опорное 140x57212</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51587409">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51594794">51594794</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51594794">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="51697789">51697789</a></td>
                    <td>Колесо опорное 125х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="51697789">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="6321059">6321059</a></td>
                    <td>Колесо грузовое 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="6321059">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="63215600">63215600</a></td>
                    <td>Колесо ведущее 230х82</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="63215600">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="77800344">77800344</a></td>
                    <td>Колесо грузовое 230х65</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="77800344">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="89039606600">89039606600</a></td>
                    <td>Колесо грузовое 250х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="89039606600">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>

    ';
}

function getBTTable () {
    echo '
        <tr>
                    <td><a href="#" data-search="121023">121023</a></td>
                    <td>Колесо ведущее 215х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="121023">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="129920">129920</a></td>
                    <td>Колесо ведущее 215x70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="129920">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="134698">134698</a></td>
                    <td>Колесо опорное 125х40-50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="134698">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="135161">135161</a></td>
                    <td>Колесо ведущее 250х90-105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="135161">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="138457">138457</a></td>
                    <td>Колесо ведущее 250x200x75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="138457">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="144443">144443</a></td>
                    <td>Колесо грузовое 300х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="144443">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="147982">147982</a></td>
                    <td>Колесо опорное 350х108-40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="147982">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="147984">147984</a></td>
                    <td>Колесо грузовое 300х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="147984">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="150131001">150131001</a></td>
                    <td>Колесо подвилочное 80х74</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="150131001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="156259">156259</a></td>
                    <td>Колесо опорное 125х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="156259">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="163950">163950</a></td>
                    <td>Колесо грузовое 215х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="163950">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="171999">171999</a></td>
                    <td>Колесо опорное 125х50/54-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="171999">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="171999N">171999N</a></td>
                    <td>Колесо опорное 125х50/54-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="171999N">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="201332">201332</a></td>
                    <td>Колесо ведущее 350x140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="201332">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="209493">209493</a></td>
                    <td>Колесо ведущее 215х159-60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="209493">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="210545">210545</a></td>
                    <td>Колесо опорное 150х76</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="210545">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="215181">215181</a></td>
                    <td>Колесо подвилочное 85х95</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="215181">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="215806">215806</a></td>
                    <td>Колесо грузовое 285х85</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="215806">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="217629">217629</a></td>
                    <td>Колесо грузовое 300х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="217629">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="220212">220212</a></td>
                    <td>Колесо подвилочное 85x74/76-13</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="220212">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="220403">220403</a></td>
                    <td>Колесо ведущее 350x127-80-7H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="220403">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="222929">222929</a></td>
                    <td>Колесо подвилочное 85х74</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="222929">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="224574">224574</a></td>
                    <td>Колесо подвилочное 84х95</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="224574">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="225152">225152</a></td>
                    <td>Колесо подвилочное 85х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="225152">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="238970">238970</a></td>
                    <td>Колесо ведущее 390/340х160</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="238970">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="239003">239003</a></td>
                    <td>Колесо ведущее 230х70/76-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="239003">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="240308">240308</a></td>
                    <td>Колесо опорное 140х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="240308">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="240453">240453</a></td>
                    <td>Колесо подвилочное 85х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="240453">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="241486">241486</a></td>
                    <td>Колесо опорное 300х106/250</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="241486">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="241650">241650</a></td>
                    <td>Колесо грузовое 300х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="241650">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="241752">241752</a></td>
                    <td>Колесо ведущее 308/310х120-80-5Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="241752">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="241860">241860</a></td>
                    <td>Колесо грузовое 345/305х105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="241860">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="249944">249944</a></td>
                    <td>Колесо грузовое 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="249944">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="250955">250955</a></td>
                    <td>Колесо опорное 150х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="250955">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="253072">253072</a></td>
                    <td>Колесо грузовое 84х64/95</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="253072">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="27631390">27631390</a></td>
                    <td>Колесо подвилочное 85х95</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="27631390">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7509579">7509579</a></td>
                    <td>Колесо опорное 150x76/81-25.5</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7509579">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7518697">7518697</a></td>
                    <td>Колесо грузовое 300х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7518697">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7535733">7535733</a></td>
                    <td>Колесо ведущее 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7535733">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7535735">7535735</a></td>
                    <td>Колесо ведущее 230x175x70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7535735">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7541444001">7541444001</a></td>
                    <td>Колесо грузовое 285х105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7541444001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7542701">7542701</a></td>
                    <td>Колесо опорное 150x130x78</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7542701">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7549373">7549373</a></td>
                    <td>Колесо грузовое 330х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7549373">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7550609">7550609</a></td>
                    <td>Колесо опорное 150х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7550609">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7563324">7563324</a></td>
                    <td>Колесо опорное 125x92x67</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7563324">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7570576">7570576</a></td>
                    <td>Колесо опорное 150х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7570576">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7577494">7577494</a></td>
                    <td>Колесо ведущее 250x75/80-5H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7577494">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7577500">7577500</a></td>
                    <td>Колесо грузовое 250х92</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7577500">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="7578683">7578683</a></td>
                    <td>Колесо грузовое 300x106-30/40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7578683">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7584009">7584009</a></td>
                    <td>Колесо грузовое 152х76</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7584009">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7585838">7585838</a></td>
                    <td>Колесо грузовое 350х106-40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7585838">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="7593818">7593818</a></td>
                    <td>Колесо грузовое 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7593818">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7593822">7593822</a></td>
                    <td>Колесо грузовое 360х160</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7593822">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7594123">7594123</a></td>
                    <td>Колесо ведущее 350х140/90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7594123">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7601542">7601542</a></td>
                    <td>Колесо грузовое 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7601542">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7610264">7610264</a></td>
                    <td>Колесо грузовое 350х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7610264">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7610264001">7610264001</a></td>
                    <td>Колесо грузовое 350х106</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7610264001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="7611201">7611201</a></td>
                    <td>Колесо опорное 125х60/47</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7611201">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function getLindeTable () {
    echo '
        <tr>
                    <td><a href="#" data-search="00039933603">00039933603</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="00039933603">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903500">0009903500</a></td>
                    <td>Колесо подвилочное 85х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903500">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903812">0009903812</a></td>
                    <td>Колесо грузовое 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903812">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903813">0009903813</a></td>
                    <td>Колесо ведущее 250x100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903813">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903819">0009903819</a></td>
                    <td>Колесо ведущее 230х75/82-45-5Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903819">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903919">0009903919</a></td>
                    <td>Колесо грузовое 250х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903919">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009904608">0009904608</a></td>
                    <td>Колесо ведущее 254х100/80-5Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009904608">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009904609">0009904609</a></td>
                    <td>Колесо ведущее 254x100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009904609">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009904612">0009904612</a></td>
                    <td>Колесо ведущее 254х100/80-5Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009904612">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009904614">0009904614</a></td>
                    <td>Колесо ведущее 254х100/80-5Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009904614">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009907772">0009907772</a></td>
                    <td>Колесо грузовое 230х90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009907772">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="0009933747">0009933747</a></td>
                    <td>Колесо опорное 140х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933747">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933800">0009933800</a></td>
                    <td>Колесо опорное 100х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933800">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933803">0009933803</a></td>
                    <td>Колесо опорное 125х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933803">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933848">0009933848</a></td>
                    <td>Колесо грузовое 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933848">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933864">0009933864</a></td>
                    <td>Колесо опорное125x47x15</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933864">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933902">0009933902</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933902">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933910">0009933910</a></td>
                    <td>Колесо подвилочное 85х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933910">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009934118">0009934118</a></td>
                    <td>Колесо ведущее 254х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009934118">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009934119">0009934119</a></td>
                    <td>Колесо ведущее 254х102-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009934119">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009934509">0009934509</a></td>
                    <td>Колесо опорное 140х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009934509">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0029902329">0029902329</a></td>
                    <td>Колесо грузовое 285X100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0029902329">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0029902330">0029902330</a></td>
                    <td>Колесо грузовое 350х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0029902330">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0029903814">0029903814</a></td>
                    <td>Колесо ведущее 343х135-90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0029903814">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0029903815">0029903815</a></td>
                    <td>Колесо ведущее 343х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0029903815">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039902305">0039902305</a></td>
                    <td>Колесо грузовое 230х90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039902305">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039902308">0039902308</a></td>
                    <td>Колесо ведущее 254x102-80-5H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039902308">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039902311">0039902311</a></td>
                    <td>Колесо ведущее 254x100-80-5H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039902311">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039902347">0039902347</a></td>
                    <td>Колесо ведущее 230х75/186-45-8Н</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039902347">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903513">0039903513</a></td>
                    <td>Колесо подвилочное 85x90-12.5</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903513">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903519">0039903519</a></td>
                    <td>Колесо опорное 100х40-15</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903519">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903563">0039903563</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903563">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903575">0039903575</a></td>
                    <td>Колесо опорное 125x40/50-15</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903575">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903582">0039903582</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903582">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933649">0039933649</a></td>
                    <td>Колесо подвилочное 85х105/110-13</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933649">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933800">0039933800</a></td>
                    <td>Колесо ведущее 230х90-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933800">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933801">0039933801</a></td>
                    <td>Колесо ведущее 230х90-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933801">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933812">0039933812</a></td>
                    <td>Колесо опорное 140х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933812">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933826">0039933826</a></td>
                    <td>Колесо ведущее 230х90-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933826">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933833">0039933833</a></td>
                    <td>Колесо опорное 125x62x20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933833">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="11524505505">11524505505</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="11524505505">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="11524505508">11524505508</a></td>
                    <td>Колесо опорное 125х40. в сборе</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="11524505508">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="11524505529">11524505529</a></td>
                    <td>Колесо опорное 125х40. в сборе</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="11524505529">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="1418501103">1418501103</a></td>
                    <td>Колесо подвилочное 85х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1418501103">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="29902329">29902329</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="29902329">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39903512">39903512</a></td>
                    <td>Колесо подвилочное 85х60/65-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39903512">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39903513">39903513</a></td>
                    <td>Колесо подвилочное 85х90-12.5</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39903513">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39903515">39903515</a></td>
                    <td>Колесо опорное 150х48/60/65-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39903515">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39903563">39903563</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39903563">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39903575">39903575</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39903575">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39933603">39933603</a></td>
                    <td>Колесо подвилочное 85х80/85-13</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39933603">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39933604">39933604</a></td>
                    <td>Колесо подвилочное 85х105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39933604">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="39933800">39933800</a></td>
                    <td>Колесо ведущее 230х90-45</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="39933800">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4491412">4491412</a></td>
                    <td>Колесо опорное 140-54/50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4491412">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="452108003">452108003</a></td>
                    <td>Колесо опорное 123х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="452108003">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50014505505">50014505505</a></td>
                    <td>Колесо ведущее 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50014505505">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8490050">8490050</a></td>
                    <td>Колесо подвилочное 100х85</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8490050">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9815054219">9815054219</a></td>
                    <td>Колесо ведущее 343х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9815054219">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9903532">9903532</a></td>
                    <td>Колесо подвилочное 85х105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9903532">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9903911">9903911</a></td>
                    <td>Колесо грузовое 350х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9903911">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9903921">9903921</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9903921">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9934509">9934509</a></td>
                    <td>Колесо опорное 140х50/54-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9934509">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9937041">9937041</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9937041">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function getStillTable() {
    echo '
        <tr>
                    <td><a href="#" data-search="0009903524">0009903524</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903524">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903555">0009903555</a></td>
                    <td>Колесо подвилочное 85x100/104-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903555">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903910">0009903910</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903910">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903916">0009903916</a></td>
                    <td>Колесо грузовое 350х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903916">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009903921">0009903921</a></td>
                    <td>Колесо грузовое 285x100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009903921">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009933972">0009933972</a></td>
                    <td>Колесо опорное 155х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009933972">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0009934121">0009934121</a></td>
                    <td>Колесо ведущее 254x102-45-5H</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0009934121">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039903515">0039903515</a></td>
                    <td>Колесо опорное 150x48/60/65-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039903515">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933604">0039933604</a></td>
                    <td>Колесо подвилочное 85x105/110-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933604">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0039933811">0039933811</a></td>
                    <td>Колесо опорное 140x50/62-20</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0039933811">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="0411624">0411624</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="0411624">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="129920N">129920N</a></td>
                    <td>Колесо ведущее 215x70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="129920N">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="220212N">220212N</a></td>
                    <td>Колесо подвилочное 85x74/76-13</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="220212N">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="413923">413923</a></td>
                    <td>Колесо подвилочное 85х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="413923">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4400716">4400716</a></td>
                    <td>Колесо грузовое 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4400716">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4401446">4401446</a></td>
                    <td>Колесо подвилочное 85x105/110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4401446">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4401471">4401471</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4401471">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4401475">4401475</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4401475">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4401476">4401476</a></td>
                    <td>Колесо подвилочное 85х105</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4401476">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4411624">4411624</a></td>
                    <td>Колесо подвилочное 85x80/82-17</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4411624">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4412343">4412343</a></td>
                    <td>Колесо опорное 150х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4412343">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4413462">4413462</a></td>
                    <td>Колесо опорное 100х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4413462">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4481005">4481005</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4481005">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4490050">4490050</a></td>
                    <td>Колесо подвилочное 100x85</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4490050">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4492271">4492271</a></td>
                    <td>Колесо опорное 150х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4492271">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4492537">4492537</a></td>
                    <td>Колесо опорное 140х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4492537">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4493413">4493413</a></td>
                    <td>Колесо опорное 125х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4493413">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="4498976">4498976</a></td>
                    <td>Колесо опорное 150х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4498976">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="494553">494553</a></td>
                    <td>Колесо грузовое 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="494553">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="50983508933">50983508933</a></td>
                    <td>Колесо ведущее 360х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="50983508933">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8365302">8365302</a></td>
                    <td>Колесо грузовое 310х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8365302">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8427484">8427484</a></td>
                    <td>Колесо грузовое 310х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8427484">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8428187">8428187</a></td>
                    <td>Колесо ведущее 360х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8428187">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8428189">8428189</a></td>
                    <td>Колесо ведущее 360x130-90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8428189">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8428366">8428366</a></td>
                    <td>Колесо опорное 156х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8428366">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8429648">8429648</a></td>
                    <td>Колесо грузовое 370х160</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8429648">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8429655">8429655</a></td>
                    <td>Колесо грузовое 370х160</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8429655">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8429940">8429940</a></td>
                    <td>Колесо опорное 150х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8429940">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8435086">8435086</a></td>
                    <td>Колесо грузовое 460х170</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8435086">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8437636">8437636</a></td>
                    <td>Колесо грузовое 359х130</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8437636">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8437637">8437637</a></td>
                    <td>Колесо ведущее 360х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8437637">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8481776">8481776</a></td>
                    <td>Колесо грузовое 250х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8481776">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8492271">8492271</a></td>
                    <td>Колесо опорное 150х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8492271">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="8665538">8665538</a></td>
                    <td>Колесо подвилочное 85х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8665538">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9903904">9903904</a></td>
                    <td>Колесо грузовое 310х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9903904">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function getNobleliftTable() {
    echo '
        <tr>
                    <td><a href="#" data-search="503598510003">503598510003</a></td>
                    <td>Колесо опорное 100х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="503598510003">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="505698510003">505698510003</a></td>
                    <td>Колесо подвилочное 84х84</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="505698510003">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="940300300013">940300300013</a></td>
                    <td>Колесо опорное 180х80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300300013">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="940300300034">940300300034</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300300034">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="940300300036">940300300036</a></td>
                    <td>Колесо опорное 330х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300300036">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="940300400011">940300400011</a></td>
                    <td>Колесо ведущее 343x140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300400011">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="940300400029">940300400029</a></td>
                    <td>Колесо ведущее 406х152</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300400029">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="940300400041">940300400041</a></td>
                    <td>Колесо ведущее 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="940300400041">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td><a href="#" data-search="961000300001">961000300001</a></td>
                    <td>Колесо ведущее 230x75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="961000300001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function getYaleTable() {
    echo '
        <tr>
                    <td><a href="#" data-search="272015300">272015300</a></td>
                    <td>Колесо подвилочное 85х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="272015300">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="277220100">277220100</a></td>
                    <td>Колесо опорное 125х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="277220100">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="277548200">277548200</a></td>
                    <td>Колесо подвилочное 85х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="277548200">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580013477">580013477</a></td>
                    <td>Колесо ведущее 230х82</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580013477">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580013479">580013479</a></td>
                    <td>Колесо ведущее 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580013479">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580014654">580014654</a></td>
                    <td>Колесо опорное 150х47</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580014654">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580022041">580022041</a></td>
                    <td>Колесо ведущее 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580022041">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026043">580026043</a></td>
                    <td>Колесо ведущее 343х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026043">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026051">580026051</a></td>
                    <td>Колесо опорное 250x100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026051">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026052">580026052</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026052">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026053">580026053</a></td>
                    <td>Колесо грузовое 349х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026053">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026054">580026054</a></td>
                    <td>Колесо грузовое 350/127/280/80</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026054">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580026058">580026058</a></td>
                    <td>Колесо ведущее 305х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580026058">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580035350">580035350</a></td>
                    <td>Колесо опорное 100х40. в сборе</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580035350">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580036546">580036546</a></td>
                    <td>Колесо ведущее 250х125</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580036546">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580037499">580037499</a></td>
                    <td>Колесо опорное 100х40</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580037499">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580037612">580037612</a></td>
                    <td>Колесо подвилочное 85х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580037612">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580037613">580037613</a></td>
                    <td>Колесо подвилочное 84х95</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580037613">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580037617">580037617</a></td>
                    <td>Колесо подвилочное 85х90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580037617">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580038706">580038706</a></td>
                    <td>Колесо подвилочное 85х66</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580038706">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580038707">580038707</a></td>
                    <td>Колесо подвилочное 85х98</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580038707">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580038927">580038927</a></td>
                    <td>Колесо ведущее  230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580038927">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580059473">580059473</a></td>
                    <td>Колесо подвилочное 85х90</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580059473">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580059476">580059476</a></td>
                    <td>Колесо грузовое 85/90-12</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580059476">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580062231">580062231</a></td>
                    <td>Колесо опорное 125х50-25</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580062231">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580062232">580062232</a></td>
                    <td>Колесо опорное 125х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580062232">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="580064668">580064668</a></td>
                    <td>Колесо подвилочное 85х110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="580064668">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function getCrownTable() {
    echo '
        <tr>
                    <td><a href="#" data-search="083179">083179</a></td>
                    <td>Колесо опорное 102х63</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="083179">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="100462">100462</a></td>
                    <td>Колесо подвилочное 83х165</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="100462">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="100462302">100462302</a></td>
                    <td>Колесо подвилочное 83х165</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="100462302">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="1046278141248">1046278141248</a></td>
                    <td>Колесо подвилочное 83х165</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="1046278141248">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="113018S60">113018S60</a></td>
                    <td>Колесо грузовое 265х102</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="113018S60">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="115032">115032</a></td>
                    <td>Колесо опорное 127х73</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="115032">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="115032401">115032401</a></td>
                    <td>Колесо опорное 127х73</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="115032401">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="115033">115033</a></td>
                    <td>Колесо опорное 127х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="115033">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="115033401">115033401</a></td>
                    <td>Колесо опорное 127х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="115033401">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="118447">118447</a></td>
                    <td>Колесо грузовое 125х63.5</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="118447">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="12150001">12150001</a></td>
                    <td>Колесо грузовое 330х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="12150001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="121501">121501</a></td>
                    <td>Колесо грузовое 330х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="121501">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="12150144201">12150144201</a></td>
                    <td>Колесо грузовое 330х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="12150144201">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="123240">123240</a></td>
                    <td>Колесо грузовое 203х107</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="123240">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="125069">125069</a></td>
                    <td>Колесо опорное 152х73</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="125069">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="125070">125070</a></td>
                    <td>Колесо опорное 152х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="125070">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="125070401">125070401</a></td>
                    <td>Колесо опорное 152х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="125070401">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="12507040188">12507040188</a></td>
                    <td>Колесо опорное 152х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="12507040188">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="127723">127723</a></td>
                    <td>Колесо грузовое 204х107</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="127723">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="127723302">127723302</a></td>
                    <td>Колесо грузовое 204х101</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="127723302">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="12772330588">12772330588</a></td>
                    <td>Колесо грузовое 204х107</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="12772330588">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="129873302">129873302</a></td>
                    <td>Колесо опорное 152х108</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="129873302">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="132359">132359</a></td>
                    <td>Колесо грузовое 216х68</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="132359">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="132359302">132359302</a></td>
                    <td>Колесо грузовое 216х68</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="132359302">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="133753001">133753001</a></td>
                    <td>Колесо опорное 14.25х8</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="133753001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="133904004">133904004</a></td>
                    <td>Колесо опорное 15.25х7</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="133904004">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="370220">370220</a></td>
                    <td>Колесо грузовое 230х70</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="370220">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="802846">802846</a></td>
                    <td>Колесо грузовое 250х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="802846">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="805888006">805888006</a></td>
                    <td>Колесо подвилочное 90х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="805888006">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="80588806">80588806</a></td>
                    <td>Колесо подвилочное 90х50</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="80588806">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="805961001">805961001</a></td>
                    <td>Колесо грузовое 230х75</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="805961001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="807557">807557</a></td>
                    <td>Колесо ведущее 343х276х140</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="807557">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="808909">808909</a></td>
                    <td>Колесо подвилочное 85х110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="808909">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="808909001">808909001</a></td>
                    <td>Колесо подвилочное 85х110</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="808909001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="808981001">808981001</a></td>
                    <td>Колесо подвилочное 85х60</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="808981001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="808984001">808984001</a></td>
                    <td>Колесо подвилочное 82х82</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="808984001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="810574001">810574001</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="810574001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="810583001">810583001</a></td>
                    <td>Колесо грузовое 285х210х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="810583001">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="811802">811802</a></td>
                    <td>Колесо опорное 125х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="811802">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="812899">812899</a></td>
                    <td>Колесо подвилочное 82х112</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="812899">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="813130">813130</a></td>
                    <td>Колесо опорное 125х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="813130">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="816356">816356</a></td>
                    <td>Колесо грузовое 330х210х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="816356">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="816357">816357</a></td>
                    <td>Колесо грузовое 330х210х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="816357">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="820183">820183</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="820183">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="820184">820184</a></td>
                    <td>Колесо грузовое 285х100</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="820184">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="820263">820263</a></td>
                    <td>Колесо опорное 125х54</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="820263">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>                
                <tr>
                    <td><a href="#" data-search="83179035">83179035</a></td>
                    <td>Колесо опорное 102х64</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="83179035">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="9815000599">9815000599</a></td>
                    <td>Колесо грузовое 330х135</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9815000599">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="#" data-search="TH2302A">TH2302A</a></td>
                    <td>Колесо опорное 152х104</td>
                    <td>Полиуретан</td>
                    <td>95А</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="TH2302A">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}

function sendEmail($to, $subject, $body) {
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . mb_encode_mimeheader('А-Сервис - Запчасти для складской техники', 'UTF-8') . ' <noreply@reach-stacker-parts.ru>' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    
    return mail($to, $subject, $body, $headers);
}

function getTyreTable() {
    echo '
        <tr>
                    <td>4.00-8</td>
                    <td>3.00/3.50/3.75</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="4.00-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>5.00-8</td>
                    <td>3.00/3.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="5.00-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>5.50-15</td>
                    <td>4.50E</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="5.50-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>6.00-9</td>
                    <td>4.00E</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="6.00-9">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>6.00-15</td>
                    <td>4.50E</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="6.00-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>6.50-01</td>
                    <td>5.00F</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="6.50-01">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>7.00-9</td>
                    <td>5.00S</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7.00-9">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>7.00-12/W</td>
                    <td>5.00S</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7.00-12/W">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>7.00-15</td>
                    <td>5.50S/6.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7.00-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>7.50-16</td>
                    <td>6.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="7.50-16">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>8.25-12</td>
                    <td>5.00S</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8.25-12">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>8.25-15</td>
                    <td>6.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8.25-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>14*4.1/2-8</td>
                    <td>3.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="14*4.1/2-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>15*4.1/2-8</td>
                    <td>3.00D</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="15*4.1/2-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>16*6-8</td>
                    <td>4.33R</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="16*6-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>18*7-8</td>
                    <td>4.33R</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="18*7-8">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>18*7-9</td>
                    <td>4.33R</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="18*7-9">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>21*8-9</td>
                    <td>6.00/6.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="21*8-9">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>23*9-10</td>
                    <td>6.50F</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="23*9-10">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>23*10-12</td>
                    <td>8.00G</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="23*10-12">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>23*12-12</td>
                    <td>10.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="23*12-12">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>27*10-12</td>
                    <td>8.00G</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="27*10-12">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>28*9-15</td>
                    <td>7.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="28*9-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>28*12.5-15</td>
                    <td>9.75</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="28*12.5-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>140/55-9</td>
                    <td>4.00E</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="140/55-9">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>180/60-10</td>
                    <td>5.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="180/60-10">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>200/50-10</td>
                    <td>6.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="200/50-10">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>250-15</td>
                    <td>7.00/7.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="250-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>300-15</td>
                    <td>8.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="300-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>355/65-15</td>
                    <td>9.75</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="355/65-15">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>8.25-20</td>
                    <td>6.50/7.00</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="8.25-20">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>9.00-16</td>
                    <td>6.00/6.50</td>
                    <td>ГББ / ГЧБ / ГБ / ГЧ</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="9.00-16">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>13.00-24</td>
                    <td>8.50/10.00</td>
                    <td>12PR</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="13.00-24">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>14.00-24</td>
                    <td>10.00</td>
                    <td>12PR</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="14.00-24">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>16.00-25</td>
                    <td>11.25</td>
                    <td>32PR IND-3 TL</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="16.00-25">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>18.00-25</td>
                    <td>13.00</td>
                    <td>40PR IND-4 TL</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="18.00-25">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>12.00-24</td>
                    <td>8.50/10.00</td>
                    <td>12PR</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="12.00-24">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>14.00-24</td>
                    <td>10.00</td>
                    <td>12PR</td>
                    <td>По запросу</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal" data-article="14.00-24">
                            <i class="fas fa-envelope me-1"></i> Запросить
                        </button>
                    </td>
                </tr>
    ';
}
?>