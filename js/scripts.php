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

    document.addEventListener('DOMContentLoaded', function() {
        // Обработчик для ссылок поиска по артикулу
        document.querySelectorAll('a[data-search]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const article = this.getAttribute('data-search');
                searchPart(article);
            });
        });
        
        // Получаем высоту навбара
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar.offsetHeight;
        
        // Обработчик для всех якорных ссылок
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Игнорируем невалидные и пустые якоря
                if (!href || href === '#' || href === '#requestModal') {
                    return;
                }
                
                e.preventDefault();
                
                // Получаем целевой элемент
                const target = document.querySelector(href);
                if (!target || !(target instanceof HTMLElement)) {
                    return;
                }
                
                // Рассчитываем позицию с учетом навбара
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                // Закрываем выпадающее меню на мобильных
                if (window.innerWidth < 992 && this.closest('.dropdown-menu')) {
                    const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('manufacturersDropdown'));
                    if (dropdown) dropdown.hide();
                }
                
                // Плавная прокрутка
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
        
        // Обработчик для кнопки выпадающего меню
        document.getElementById('manufacturersDropdown').addEventListener('click', function(e) {
            // Если меню уже открыто или это мобильная версия - не прокручиваем
            if (this.classList.contains('show') || window.innerWidth < 992) {
                e.preventDefault();
            }
        });
        
        // Закрытие меню при клике вне его (для десктопов)
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.nav-item.dropdown')) {
                const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('manufacturersDropdown'));
                if (dropdown && window.innerWidth >= 992) {
                    dropdown.hide();
                }
            }
        });
        
        // Инициализация выпадающего меню
        const manufacturersDropdown = new bootstrap.Dropdown(document.getElementById('manufacturersDropdown'));
        
        // Плавное открытие/закрытие меню
        const dropdownMenu = document.querySelector('#manufacturersDropdown + .dropdown-menu');
        if (dropdownMenu) {
            dropdownMenu.style.transition = 'opacity 0.3s, transform 0.3s';
            
            document.getElementById('manufacturersDropdown').addEventListener('show.bs.dropdown', function() {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    dropdownMenu.style.opacity = '1';
                    dropdownMenu.style.transform = 'translateY(0)';
                }, 10);
            });
            
            document.getElementById('manufacturersDropdown').addEventListener('hide.bs.dropdown', function() {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.transform = 'translateY(-10px)';
            });
        }
        
        // Кнопка "Наверх"
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
        
        // Функция добавления нового артикула
        window.addItem = function() {
            const container = document.getElementById('itemsContainer');
            if (!container) return;
            
            const newItem = document.createElement('div');
            newItem.className = 'art-row row g-2 mb-2';
            newItem.innerHTML = `
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
            container.appendChild(newItem);
        };
        
        // Функция удаления артикула
        window.removeItem = function(btn) {
            const item = btn.closest('.art-row');
            if (item) {
                item.remove();
            }
        };
        
        // Обработчики для форм
        document.getElementById('requestForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Закрываем модалку запроса
            const requestModal = bootstrap.Modal.getInstance(document.getElementById('requestModal'));
            if (requestModal) {
                requestModal.hide();
            }
            
            // Показываем модалку благодарности
            const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
            thankYouModal.show();
            
            // Очистка формы
            this.reset();
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
        
        document.getElementById('contactForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Сообщение отправлено! Мы свяжемся с вами в ближайшее время.');
            this.reset();
        });
    });
</script>