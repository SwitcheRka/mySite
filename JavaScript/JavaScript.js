// Элементы управления
const aboutBtn = document.getElementById('about-btn');
const advantagesBtn = document.getElementById('advantages-btn');
const aboutContent = document.getElementById('about-content');
const advantagesContent = document.getElementById('advantages-content');

// Все изображения
const aboutImages = document.querySelectorAll('.about-image');
const advantagesImages = document.querySelectorAll('.advantages-image');

// Функция переключения вида
function switchView(showContent, hideContent, showImages, hideImages) {
    // Скрываем текущий контент и изображения
    hideContent.style.display = 'none';
    hideImages.forEach(img => img.style.opacity = '0');
    
    // Показываем новый контент
    showContent.style.display = 'block';
    
    // Анимация появления новых изображений
    showImages.forEach((img, index) => {
        setTimeout(() => {
            img.style.opacity = '1';
        }, index * 100);
    });
}

// Обработчики событий
aboutBtn.addEventListener('click', () => {
    switchView(
        aboutContent, 
        advantagesContent, 
        aboutImages, 
        advantagesImages
    );
});

advantagesBtn.addEventListener('click', () => {
    switchView(
        advantagesContent, 
        aboutContent, 
        advantagesImages, 
        aboutImages
    );
});



        // Получаем все элементы навигации
        const navItems = document.querySelectorAll('.nav-item');
        
        // Функция для активации элемента
        function activateNavItem(clickedItem) {
            navItems.forEach(item => {
                item.classList.remove('active');
            });
            
            clickedItem.classList.add('active');
        }
        
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                activateNavItem(this);
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('review-form');
            const openBtn = document.getElementById('openReviewBtn');
            const closeBtn = document.querySelector('.close');
        
            // Открытие модального окна
            openBtn.addEventListener('click', function() {
                modal.style.display = 'block';
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            // Обработчики для кнопок "В корзину"
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const orderFormModal = document.getElementById('order-form-modal');
            const closeModal = document.querySelector('.close-modal');
            const selectedProductInfo = document.getElementById('selected-product-info');
            
            // Для каждой кнопки "В корзину"
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Получаем информацию о товаре
                    const productCard = this.closest('.product-card');
                    const productName = productCard.querySelector('.product-name').textContent;
                    const productPrice = productCard.querySelector('.product-price').textContent;
                    const productImage = productCard.querySelector('.product-image').src;
                    
                    // Заполняем информацию о товаре в форме
                    selectedProductInfo.innerHTML = `
                        <img src="${productImage}" alt="${productName}" style="max-width: 100px; float: left; margin-right: 10px;">
                        <h4>${productName}</h4>
                        <p>${productPrice}</p>
                        <div style="clear: both;"></div>
                    `;
                    
                    // Показываем модальное окно
                    orderFormModal.style.display = 'block';
                });
            });
            
            // Закрытие модального окна
            closeModal.addEventListener('click', function() {
                orderFormModal.style.display = 'none';
            });
            
            // Закрытие при клике вне окна
            window.addEventListener('click', function(e) {
                if (e.target === orderFormModal) {
                    orderFormModal.style.display = 'none';
                }
            });
            
            // Обработка отправки формы
            document.getElementById('order-form').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Здесь можно добавить AJAX-запрос для отправки данных на сервер
                alert('Заказ оформлен! Мы свяжемся с вами в ближайшее время.');
                orderFormModal.style.display = 'none';
            });
        });