<!DOCTYPE html>
<html lang="ru">
    <head> <!--Голова-->
        <meta charset="UTF-8"> <!--Кодировка-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Адаптив-->
        <title>Умная радость</title>
        <link rel ="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="header-container">
                    <div class="logo-section">
                        <img src="media/logo.webp" alt="Логотип" class="logo-img">
                        <div class="logo-text">Умная радость</div>
                    </div>
                    
                    <nav class="nav-menu">
                <div class="nav-item active" id="about-btn"><a href="#about-and-advantages">О нас</a></div>
                <div class="nav-item" id="advantages-btn"><a href="#about-and-advantages">Наши достоинства</a></div>
                <div class="nav-item" id="catalog-btn"><a href="#catalog-section">Каталог</a></div>
                <div class="nav-item" id="reviews-btn"><a href="#">Отзывы</a></div>
                    </nav>

                </div>
            </header>
            <!-- Основное содержимое страницы -->
            <main class="main-content">
                <!-- Круглый логотип -->
                <img src="media/logo.webp" 
                     alt="Логотип Умная радость" 
                     class="logo-main">
                
                <h1 class="main-title">Умная радость</h1>
                <p class="main-subtitle">Тонкая работа!</p>
            </main>

            
            <!-- О нас -->
            <div class="about-wrapper" id="about-and-advantages">
                <div class="side-images-container">
                    <!-- Изображения для "О нас" -->
                    <img src="media/photoWOMEN.jpg" 
                         class="side-image-about about-image left" 
                         alt="Винтажные украшения">
                    <img src="media/photoMEN.jpg" 
                         class="side-image-about about-image right" 
                         alt="Винтажные аксессуары">
                    
                    <!-- Изображения для "Наши достоинства" -->
                    <img src="media/luxery1.jpg" 
                         class="side-image advantages-image left top" 
                         alt="Доставка">
                    <img src="media/luxery2.jpg" 
                         class="side-image advantages-image left bottom" 
                         alt="Консультация">
                    <img src="media/luxery3.jpg"
                         class="side-image advantages-image right top" 
                         alt="Качество">
                    <img src="media/luxery4.jpg" 
                         class="side-image advantages-image right bottom" 
                         alt="Удобство">
                </div>
                    <section class="about-section" id="content-section">
                        <div id="about-content">
                                <!-- Левое декоративное фото -->
                            <h2 class="about-title">О нас</h2>
                            <p class="about-text">
                                Мы являемся модной компанией, которая продает винтажные аксессуары. Наши изделия изготавливаются с использованием экологически чистых технологий и доставляются прямо к Вам домой. Наша целевая аудитория – взрослые. Мы хотим передать ощущение важности, оставаясь при этом профессиональными.
                            </p>
                            
                            <!-- Новый разделитель с текстом -->
                            <div class="divider-container">
                                <hr class="divider-line">
                                <h3 class="features-title">Чем мы занимаемся?</h3>
                            </div>
                            
                            <ul class="features-list">
                                <li class="feature-item">
                                    <div class="feature-checkbox"></div>
                                    <span>Изготовление дизайнерских украшений</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-checkbox"></div>
                                    <span>Продажа дизайнерских украшений</span>
                                </li>
                                <li class="feature-item">
                                    <div class="feature-checkbox"></div>
                                    <span>Доставка покупки клиенту</span>
                                </li>
                            </ul>
                        </div>

                <!-- Контент "Наши достоинства" (изначально скрыт) -->
                <div id="advantages-content" style="display: none;">
                    <h2 class="about-title content-item">Наши достоинства</h2>
                    <p class="about-text content-item">
                        Мы являемся модной компанией, которая продает винтажные аксессуары. Наши изделия изготавливаются с использованием экологически чистых технологий и доставляются прямо к Вам домой. Наша целевая аудитория – взрослые. Мы хотим передать ощущение важности, оставаясь при этом профессиональными.
                    </p>
                    
                    <div class="divider-container content-item">
                        <hr class="divider-line">
                        <h3 class="features-title">Каковы же достоинства?</h3>
                    </div>
                    
                    <ul class="features-list content-item">
                        <li class="feature-item">
                            <div class="feature-checkbox"></div>
                            <span>Оформление доставки на дом в пару кликов</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-checkbox"></div>
                            <span>Помощь в выборе товара, подходящего вашему стилю</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-checkbox"></div>
                            <span>Удобный веб-сайт</span>
                        </li>
                    </ul>
                </div>
                    </section>
            </div>
            <section class="catalog-section" id="catalog-section">
                <div class="catalog-container">
                    <h2 class="catalog-title">Каталог товаров</h2>
                    <p class="catalog-description">
                        Не забудьте добавить товаров в свою корзинку, здесь вы как раз можете это сделать
                    </p>
                    
                    <div class="products-grid">
                        <!-- Товар 1 -->
                        <div class="product-card">
                            <img src="media/luxery1.jpg" alt="Товар 1" class="product-image">
                            <div class="product-info">
                                <h3 class="product-name">Товар 1</h3>
                                <p class="product-price">Цена Руб.</p>
                                <a href="#" class="add-to-cart">В корзину</a>
                            </div>
                        </div>
                        
                        <!-- Товар 2 -->
                        <div class="product-card">
                            <img src="media/luxery2.jpg" alt="Товар 2" class="product-image">
                            <div class="product-info">
                                <h3 class="product-name">Товар 2</h3>
                                <p class="product-price">Цена Руб.</p>
                                <a href="#" class="add-to-cart">В корзину</a>
                            </div>
                        </div>
                        
                        <!-- Товар 3 -->
                        <div class="product-card">
                            <img src="media/luxery3.jpg" alt="Товар 3" class="product-image">
                            <div class="product-info">
                                <h3 class="product-name">Товар 3</h3>
                                <p class="product-price">Цена Руб.</p>
                                <a href="#" class="add-to-cart">В корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="reviews-section" class="content-section" style="display: block;">
                <div class="reviews-section">
                    <div class="reviews-container">
                        <h2 class="section-title">Отзывы наших клиентов</h2>
                        
                        <div class="reviews-grid">
                        <?php
                $reviewsFile = 'php/reviews.json';
                $reviews = [];
                
                if (file_exists($reviewsFile)) {
                    $reviews = json_decode(file_get_contents($reviewsFile), true) ?: [];
                    
                    foreach ($reviews as $review) {
                        echo '
                        <div class="review-card">
                            <div>
                                <div class="review-author">'.$review['name'].'</div>
                                <div class="review-date">'.date('d.m.Y', strtotime($review['date'])).'</div>
                            </div>
                            <div class="review-rating">'.str_repeat('★', $review['rating']).str_repeat('☆', 5 - $review['rating']).'</div>
                            <p class="review-text">'.$review['review'].'</p>
                        </div>';
                    }
                }
                ?>
            </div>



                        </div>
                        <a id = "openReviewBtn" href="#review-form" class="leave-review-btn">Оставить отзыв</a>
                        <!-- Форма для отзыва -->
                        <div id="review-form" class="review-form-container">
                            <h3 class="form-title">Оставить отзыв</h3>
                            
                            <form action="php/form-handler.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Ваше имя:</label>
                                    <input type="text" id="name" name="name" required class="form-input">
                                </div>
                                
                                <div class="form-group">
                                    <label>Ваша оценка:</label>
                                    <div class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" checked>
                                        <label for="star5">★</label>
                                        <input type="radio" id="star4" name="rating" value="4">
                                        <label for="star4">★</label>
                                        <input type="radio" id="star3" name="rating" value="3">
                                        <label for="star3">★</label>
                                        <input type="radio" id="star2" name="rating" value="2">
                                        <label for="star2">★</label>
                                        <input type="radio" id="star1" name="rating" value="1">
                                        <label for="star1">★</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="review">Текст отзыва:</label>
                                    <textarea id="review" name="review" required class="form-textarea"></textarea>
                                </div>
                            
                                
                                <button type="submit" class="submit-btn">Сохранить отзыв</button>
                            </form>
                        </div>
                    </div>
            </section>

            <!-- Футер -->
            <footer>
                <div class="footer-container">
                    <!-- Секция с логотипом -->
                    <div class="footer-logo-section">
                        <img src="media/logo.webp" alt="Логотип Умная радость" class="footer-logo">
                        <div class="footer-title">Умная радость</div>
                    </div>
                    
                    <!-- Секция с контактами -->
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <h3>Контактная информация:</h3>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Адреса:</h3>
                            <p>г. Волгоград, ул. мира, д. 10</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Контактный номер телефона:</h3>
                            <p>+7 (123) 456-78-90</p>
                            <p>+7 (987) 654-32-10</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Электронная почта:</h3>
                            <p>info@umnaya-radost.ru</p>
                            <p>support@umnaya-radost.ru</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

                <!-- Форма оформления заказа (изначально скрыта) -->
                <div id="order-form-modal" class="modal">
                    <div class="modal-content">
                        <button class="close-modal" aria-label="Закрыть">&times;</button>
                        <h2>Оформление заказа</h2>
                        
                        <form id="order-form" method="POST">
                            <div class="form-group">
                                <label for="order-name">Ваше полное имя</label>
                                <input type="text" id="order-name" name="name" placeholder="Иванов Иван" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="order-phone">Контактный телефон</label>
                                <input type="tel" id="order-phone" name="phone" placeholder="+7 (999) 123-45-67" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="order-email">Электронная почта</label>
                                <input type="email" id="order-email" name="email" placeholder="example@mail.ru" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="order-address">Адрес доставки</label>
                                <textarea id="order-address" name="address" placeholder="Город, улица, дом, квартира" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Ваш заказ</label>
                                <div id="selected-product-info">
                                    <!-- Здесь будет динамически добавляться информация о товаре -->
                                </div>
                            </div>
                            
                            <button type="submit" class="submit-order-btn">
                                <span class="btn-text">Подтвердить заказ</span>
                                <span class="btn-icon">→</span>
                            </button>
                        </form>
                    </div>
                </div>
        
        <script src="JavaScript/JavaScript.js"></script>
    </body>
</html>