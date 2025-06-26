<script>
    // Глобальная функция для поиска по артикулу
    function searchPart(article) {
        // Очистка артикула (как на сервере)
        const cleanedArticle = article.replace(
            /[., \/\-+()\\*?[\]^$#@!~`&;:<>='"|{}%~]/g, 
            ''
        );
        
        // Создаем форму для отправки POST запроса
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'https://reach-stacker-parts.ru/search.php';
        form.target = '_blank'; // Открыть в новом окне
        
        // Создаем скрытое поле с правильным именем 'search'
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'search';
        input.value = cleanedArticle;
        
        // Добавляем поле в форму и отправляем
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
        
        // Удаляем форму через 1 секунду (после отправки)
        setTimeout(() => {
            if (document.body.contains(form)) {
                document.body.removeChild(form);
            }
        }, 1000);
    }

    // Функция для получения токена reCAPTCHA (должна быть глобальной)
    function getRecaptchaToken(action) {
        return new Promise((resolve) => {
            // Проверяем загружена ли reCAPTCHA
            if (typeof grecaptcha === 'undefined') {
                console.error('reCAPTCHA не загружена');
                resolve('recaptcha-not-loaded');
                return;
            }
            
            grecaptcha.ready(() => {
                grecaptcha.execute('6LdQcW4rAAAAAIgzlEnFq_v6nTtU44mVIa2IfZ1n', { action })
                    .then(token => resolve(token))
                    .catch(error => {
                        console.error('reCAPTCHA error:', error);
                        resolve('recaptcha-error');
                    });
            });
        });
    }

    // Общая функция для отправки AJAX запроса
    async function submitForm(form, url, successCallback) {
        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');
        const originalHtml = submitButton.innerHTML;
        
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Отправка...';
        
        try {
            const response = await fetch(url, {
                method: 'POST',
                body: formData
            });
            
            // Проверяем Content-Type ответа
            const contentType = response.headers.get('content-type');
            
            if (!contentType || !contentType.includes('application/json')) {
                const text = await response.text();
                throw new Error(`Неверный формат ответа. Ожидался JSON, получен: ${contentType}. Текст: ${text.slice(0, 100)}...`);
            }
            
            const result = await response.json();
            
            if (result.success) {
                if (successCallback) successCallback(result);
            } else {
                alert(result.message || 'Ошибка при отправке формы');
            }
        } catch (error) {
            console.error('Ошибка:', error);
            
            // Более информативное сообщение
            let errorMessage = 'Произошла ошибка при отправке формы';
            
            if (error.message.includes('404')) {
                errorMessage = 'Файл обработчика не найден. Сообщите администратору.';
            } else if (error.message.includes('JSON')) {
                errorMessage = 'Сервер вернул неверный формат данных';
            }
            
            alert(`${errorMessage}\n\nТехническая информация: ${error.message}`);
        } finally {
            submitButton.disabled = false;
            submitButton.innerHTML = originalHtml;
        }
    }

    // Функция для добавления нового поля артикула
    function addItem() {
        const container = document.getElementById('itemsContainer');
        const newRow = document.createElement('div');
        newRow.className = 'art-row row g-2 mb-2';
        newRow.innerHTML = `
            <div class="col-6">
                <input type="text" class="form-control" name="article[]" placeholder="Артикул" required>
            </div>
            <div class="col-4">
                <input type="number" class="form-control" name="quantity[]" placeholder="Кол-во" min="1" required>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-danger w-100" onclick="removeItem(this)">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        container.appendChild(newRow);
    }

    // Функция для удаления поля артикула
    function removeItem(button) {
        const row = button.closest('.art-row');
        if (row) {
            row.remove();
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // 1. Обработчик для ссылок поиска по артикулу
        document.querySelectorAll('a[data-search]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const article = this.getAttribute('data-search');
                searchPart(article);
            });
        });
        
        // 2. Плавная прокрутка по якорям
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar.offsetHeight;
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                if (!href || href === '#' || href === '#requestModal') {
                    return;
                }
                
                e.preventDefault();
                
                const target = document.querySelector(href);
                if (!target || !(target instanceof HTMLElement)) {
                    return;
                }
                
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                if (window.innerWidth < 992 && this.closest('.dropdown-menu')) {
                    const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('manufacturersDropdown'));
                    if (dropdown) dropdown.hide();
                }
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
        
        // 3. Обработчики для выпадающего меню
        const manufacturersDropdown = document.getElementById('manufacturersDropdown');
        if (manufacturersDropdown) {
            manufacturersDropdown.addEventListener('click', function(e) {
                if (this.classList.contains('show') || window.innerWidth < 992) {
                    e.preventDefault();
                }
            });
            
            const dropdownMenu = document.querySelector('#manufacturersDropdown + .dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.style.transition = 'opacity 0.3s, transform 0.3s';
                
                manufacturersDropdown.addEventListener('show.bs.dropdown', function() {
                    dropdownMenu.style.opacity = '0';
                    dropdownMenu.style.transform = 'translateY(-10px)';
                    setTimeout(() => {
                        dropdownMenu.style.opacity = '1';
                        dropdownMenu.style.transform = 'translateY(0)';
                    }, 10);
                });
                
                manufacturersDropdown.addEventListener('hide.bs.dropdown', function() {
                    dropdownMenu.style.opacity = '0';
                    dropdownMenu.style.transform = 'translateY(-10px)';
                });
            }
        }
        
        // Закрытие меню при клике вне его
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.nav-item.dropdown')) {
                const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('manufacturersDropdown'));
                if (dropdown && window.innerWidth >= 992) {
                    dropdown.hide();
                }
            }
        });
        
        // 4. Кнопка "Наверх"
        const scrollToTopBtn = document.getElementById('scrollToTop');
        if (scrollToTopBtn) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.add('show');
                } else {
                    scrollToTopBtn.classList.remove('show');
                }
            });
            
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
        
        // 5. Обработчики для кнопок "Запросить" в таблицах
        document.querySelectorAll('button[data-bs-target="#requestModal"][data-article]').forEach(button => {
            button.addEventListener('click', function() {
                const article = this.getAttribute('data-article');
                const firstArticleInput = document.querySelector('#requestModal input[name="article[]"]');
                
                if (firstArticleInput) {
                    firstArticleInput.value = article;
                }
                
                // Обновляем токен reCAPTCHA
                getRecaptchaToken('request').then(token => {
                    document.getElementById('request-recaptcha').value = token;
                });
            });
        });
        
        // 6. Инициализация карусели Swiper
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 0,
            speed: 1000,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            }
        });
        
        // 7. Обработчики для форм
        
        // Форма обратной связи
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                const form = this;
                
                // Получаем токен
                const token = await getRecaptchaToken('contact');
                document.getElementById('contact-recaptcha').value = token;
                
                // Отправляем форму
                await submitForm(this, '/php/submit_contact.php', function(result) {
                    alert('Сообщение отправлено! Мы свяжемся с вами в ближайшее время.');
                    form.reset();
                });
            });
        }
        
        // Форма запроса цены
        const requestForm = document.getElementById('requestForm');
        if (requestForm) {
            requestForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                const form = this;
                
                // Получаем токен
                const token = await getRecaptchaToken('request');
                document.getElementById('request-recaptcha').value = token;
                
                // Отправляем форму
                await submitForm(this, '/php/submit_request.php', function(result) {
                    // Показываем номер запроса
                    if (result.requestNumber) {
                        document.getElementById('requestNumberDisplay').textContent = '#' + result.requestNumber;
                    }
                    
                    // Закрываем модалку запроса
                    const requestModal = bootstrap.Modal.getInstance(document.getElementById('requestModal'));
                    if (requestModal) requestModal.hide();
                    
                    // Показываем модалку благодарности
                    const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                    thankYouModal.show();
                    
                    // Очистка формы
                    form.reset();

                    const itemsContainer = document.getElementById('itemsContainer');
                    if (itemsContainer) {
                        itemsContainer.innerHTML = `
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
                        `;
                    }
                });
            });
        }
    });
</script>
<script>
function sendEmail() {
    fetch('/php/send_email.php', {
        method: 'POST'
    })
    .then(response => response.text())
    .then(data => {
        window.location.href = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>