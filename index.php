<?php
require_once __DIR__ . '/src/helpers.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Колеса Ormond для складской техники | А-Сервис</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/css/style.css'); ?>" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
</head>
<body>
    <!-- Шапка -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 992 257" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0,257) scale(0.1,-0.1)">
                        <path d="M1165 2563 c-325 -39 -559 -145 -776 -351 -275 -261 -405 -591 -386 -982 17 -338 128 -610 343 -840 232 -246 520 -369 909 -387 410 -19 788 117 1040 374 41 42 75 82 75 87 0 13 -46 38 -430 242 l-285 152 -3 429 -2 429 212 114 c117 62 238 127 268 143 108 57 220 122 220 128 0 19 -132 157 -201 208 -99 75 -292 171 -413 206 -154 44 -420 66 -571 48z m400 -256 c104 -23 206 -62 328 -125 85 -44 106 -58 94 -66 -8 -6 -354 -188 -771 -405 -703 -367 -756 -397 -756 -420 0 -24 55 -55 763 -429 419 -221 768 -406 775 -410 17 -11 -84 -82 -181 -127 -217 -100 -534 -120 -795 -50 -187 50 -335 138 -474 283 -134 140 -206 267 -256 451 -23 86 -25 115 -25 271 0 159 2 184 27 274 51 186 134 332 262 461 157 157 350 256 586 301 92 17 325 12 423 -9z m-85 -1017 c0 -206 -4 -330 -10 -330 -12 0 -601 309 -617 324 -9 8 67 53 295 173 169 89 313 162 320 162 9 1 12 -71 12 -329z"/>
                        <path d="M4808 1879 c-99 -11 -189 -44 -274 -101 -158 -106 -244 -272 -244 -473 1 -324 184 -536 499 -575 136 -18 316 11 421 66 75 39 72 33 49 105 -12 35 -23 66 -25 67 -1 2 -40 -15 -86 -37 -150 -75 -331 -79 -474 -12 -87 41 -138 91 -182 179 -37 76 -37 76 -37 201 0 159 19 213 106 305 86 93 169 129 307 134 86 4 114 1 172 -18 39 -12 90 -35 115 -51 25 -16 50 -29 55 -29 5 0 24 27 40 61 36 70 39 65 -61 118 -95 51 -247 75 -381 60z"/>
                        <path d="M2717 1311 c-130 -301 -237 -551 -237 -555 0 -4 36 -6 81 -4 l81 3 73 175 73 175 249 2 248 3 75 -180 75 -180 83 0 c45 0 82 3 82 6 0 4 -106 253 -236 555 l-237 549 -86 0 -87 0 -237 -549z m418 155 c47 -113 85 -208 85 -211 0 -3 -84 -5 -186 -5 -102 0 -184 4 -182 9 71 181 185 436 191 425 4 -7 46 -105 92 -218z"/>
                        <path d="M9363 1716 c-175 -40 -324 -182 -369 -350 -18 -67 -18 -217 1 -285 59 -222 240 -351 495 -351 47 0 116 7 154 15 85 18 200 70 194 87 -3 7 -13 37 -23 66 -10 32 -22 51 -29 48 -142 -63 -219 -81 -321 -73 -97 8 -156 31 -215 84 -109 98 -142 240 -94 410 30 106 125 188 249 213 116 24 282 -8 346 -66 16 -14 20 -10 54 47 28 48 33 64 23 71 -105 69 -167 89 -298 94 -69 2 -127 -1 -167 -10z"/>
                        <path d="M5410 1230 l0 -480 335 0 335 0 0 65 0 65 -257 2 -258 3 -3 147 -3 148 228 2 228 3 3 68 3 67 -231 0 -231 0 3 128 3 127 248 3 247 2 0 65 0 65 -325 0 -325 0 0 -480z"/>
                        <path d="M6230 1231 l0 -481 75 0 75 0 2 172 3 173 170 6 c94 3 186 12 205 19 84 29 169 113 190 188 5 20 10 69 10 108 0 85 -30 153 -92 209 -83 75 -102 80 -385 83 l-253 3 0 -480z m472 329 c108 -31 144 -201 58 -273 -49 -42 -94 -51 -240 -52 l-135 0 -3 160 c-1 87 0 166 3 174 5 12 29 13 143 8 75 -3 154 -11 174 -17z"/>
                        <path d="M7100 1229 l0 -480 253 3 c243 3 254 4 301 27 133 65 192 196 152 334 -16 56 -79 137 -116 149 -12 4 -10 11 11 34 46 50 63 94 63 164 0 79 -25 132 -84 182 -69 60 -113 68 -361 68 l-219 0 0 -481z m422 341 c56 -16 88 -60 88 -124 0 -104 -43 -129 -225 -130 l-130 -1 -3 133 -3 132 118 0 c65 0 135 -5 155 -10z m66 -404 c40 -21 63 -50 72 -93 12 -51 -2 -109 -36 -144 -36 -37 -95 -49 -249 -49 l-125 0 0 150 0 150 155 0 c114 0 163 -4 183 -14z"/>
                        <path d="M7960 1230 l0 -480 73 1 72 0 285 352 285 351 3 -352 2 -352 75 0 75 0 0 480 0 480 -68 0 -68 0 -289 -357 -290 -358 -3 358 -2 357 -75 0 -75 0 0 -480z"/>
                        <path d="M3672 1213 l3 -68 255 0 255 0 3 68 3 67 -261 0 -261 0 3 -67z"/>
                    </g>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">О бренде</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#polyurethane" id="manufacturersDropdown" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Полиуретановые колеса
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="manufacturersDropdown">
                            <li><a class="dropdown-item" href="#hyster">Hyster</a></li>
                            <li><a class="dropdown-item" href="#jungheinrich">Jungheinrich</a></li>
                            <li><a class="dropdown-item" href="#bt">BT</a></li>
                            <li><a class="dropdown-item" href="#Linde">Linde</a></li>
                            <li><a class="dropdown-item" href="#still">Still</a></li>
                            <li><a class="dropdown-item" href="#Noblelift">Noblelift</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#solid">Цельнолитые колеса</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Обратная связь</a></li>
                    <li class="nav-item"><button class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#requestModal">Получить цену</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Основной контент -->
    <main>
        <!-- Кнопка "Наверх" -->
        <div id="scrollToTop" class="scroll-to-top">
            <i class="fas fa-arrow-up"></i>
        </div>
        <!-- О бренде Ormond -->
        <section id="about" class="py-5">
            <div class="container">
                <h2 class="section-title">О бренде Ormond</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Ormond - это премиальный бренд промышленных колес и роликов, производимых компанией Wonray. Специализируясь на решениях для складской и промышленной техники, Ormond сочетает в себе немецкое качество и китайскую эффективность производства.</p>
                        <p>Бренд был основан в 2005 году с целью создания колесных систем, способных выдерживать экстремальные нагрузки в условиях интенсивной эксплуатации. За 15 лет Ormond завоевал доверие клиентов по всему миру, став синонимом надежности и долговечности.</p>
                        <p>Наши колеса используются на погрузчиках, штабелерах, тележках и другом складском оборудовании ведущих мировых производителей.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Наши преимущества</h5>
                                <ul>
                                    <li>Срок службы в 2 раза выше аналогов</li>
                                    <li>Снижение вибрации на 40%</li>
                                    <li>Устойчивость к маслам и химикатам</li>
                                    <li>Рабочий диапазон температур: -30°C до +80°C</li>
                                    <li>Снижение шума до 65 дБ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Полиуретановые колеса -->
        <section id="polyurethane" class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title">Полиуретановые колеса для складской техники</h2>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="images/wheel-placeholder.jpg" alt="Колесо Ormond" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h3>Технические характеристики</h3>
                        <p>Полиуретановые колеса Ormond разработаны специально для интенсивной эксплуатации на складах. Особенности:</p>
                        <ul>
                            <li>Материал: полиуретан высокой плотности (95A)</li>
                            <li>Срок службы: 2 000+ часов</li>
                            <li>Макс. нагрузка: от 200 до 2000 кг</li>
                            <li>Температурный режим: -35°C до +100°C</li>
                            <li>Стойкость к маслам, жирам и химикатам</li>
                        </ul>
                    </div>
                </div>

                <!-- Разделы производителей -->
                <!-- Hyster -->
                <div class="manufacturer-section" id="hyster">
                    <h3>Hyster</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getHysterTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- JH -->
                <div class="manufacturer-section" id="jungheinrich">
                    <h3>Jungheinrich</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getJHTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- BT -->
                <div class="manufacturer-section" id="bt">
                    <h3>BT</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getBTTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Linde -->           
                <div class="manufacturer-section" id="Linde">
                    <h3>Linde</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getLindeTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Still -->
                <div class="manufacturer-section" id="still">
                    <h3>Still</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getStillTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Noblelift -->
                <div class="manufacturer-section" id="Noblelift">
                    <h3>Noblelift</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Наименование</th>
                                    <th>Тип</th>
                                    <th>Твердость по Шору</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    echo getNobleliftTable();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Цельнолитые колеса -->
        <section id="solid" class="py-5">
            <div class="container">
                <h2 class="section-title">Цельнолитые колеса</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Преимущества цельнолитых колес</h5>
                                <p>Наши цельнолитые колеса производятся по технологии монолитного литья, что обеспечивает:</p>
                                <ul>
                                    <li>Исключительную прочность конструкции</li>
                                    <li>Равномерное распределение нагрузки</li>
                                    <li>Отсутствие проколов и деформаций</li>
                                    <li>Устойчивость к агрессивным средам</li>
                                    <li>Срок службы до 10 лет</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Области применения</h5>
                                <p>Цельнолитые колеса Ormond идеально подходят для:</p>
                                <ul>
                                    <li>Складских тележек и платформ</li>
                                    <li>Промышленного оборудования</li>
                                    <li>Медицинской техники</li>
                                    <li>Аэропортового оборудования</li>
                                    <li>Пищевого производства</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Обратная связь -->
        <section id="contact" class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title">Обратная связь</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form id="contactForm">
                                    <div class="mb-3">
                                        <label class="form-label">Ваше имя</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Телефон</label>
                                        <input type="tel" class="form-control" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Сообщение</label>
                                        <textarea class="form-control" rows="4" name="message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Футер -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>А-Сервис</h5>
                    <p>Поставка запасных частей для складской техники с 2008 года</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Контакты</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone me-2"></i> +7 (495) 123-45-67</li>
                        <li><i class="fas fa-envelope me-2"></i> xxxxx@xxxxxx</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Москва, ул. Промышленная, 15</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Быстрые ссылки</h5>
                    <ul class="list-unstyled">
                        <li><a href="#about" class="text-white">О бренде</a></li>
                        <li><a href="#polyurethane" class="text-white">Колеса</a></li>
                        <li><a href="#" class="text-white">Доставка</a></li>
                        <li><a href="#" class="text-white">Политика конфиденциальности</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 А-Сервис. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <!-- Модальное окно запроса цены -->
    <div class="modal fade" id="requestModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Запрос цены на колеса</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="requestForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Имя *</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Компания</label>
                                <input type="text" class="form-control" name="company">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Телефон *</label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Артикулы и количество</label>
                            <div id="itemsContainer">
                                <div class="art-row row g-2 mb-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="article[]" placeholder="Артикул" required>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control" name="quantity[]" placeholder="Кол-во" min="1" required>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-danger w-100" onclick="removeItem(this)" disabled>
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="addItem()">
                                <i class="fas fa-plus me-1"></i> Добавить артикул
                            </button>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Дополнительная информация</label>
                            <textarea class="form-control" rows="3" name="comments"></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-paper-plane me-2"></i> Отправить запрос
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно благодарности -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Спасибо за ваш запрос!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <i class="fas fa-check-circle fa-4x text-success mb-3"></i>
                    <p>Ваш запрос успешно отправлен. Наши менеджеры свяжутся с вами в ближайшее время для уточнения деталей.</p>
                    <p>Обычно мы отвечаем в течение 1 рабочего дня.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<?php include_once __DIR__ . '/js/scripts.php' ?>
</body>
</html>