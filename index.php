<?php
require 'fungsi/ambil_dataOders.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="landing page\img\logo yamjellyjoy.png" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="landing page/css/styles.css">

        <title>YAM JELLYJOY</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav">
            <a href="#" class="nav__logo">
                <img src="landing page\img\logo yamjellyjoy.png" alt="logo image">
                <span class="yam">YAM</span> <span class="jellyjoy">JELLYJOY</span>
            </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About Us</a>
                        </li>

                        <li class="nav__item">
                            <a href="#reviews" class="nav__link">Reviews</a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#recently" class="nav__link">Recently</a>
                        </li>

                        <li class="nav__item">
                            <a href="logreg.php" class="nav__link">Login as Admin</a>
                        </li>

                    </ul>
                   </li> 
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>

                    <img src="landing page/assets/bunga 1.png" alt="nav image" class="nav__img-1">
                    <img src="landing page/assets/bunga 2.png" alt="nav image" class="nav__img-2">
                </div>

                <div class="nav__buttons">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i> 

                    <!-- Toggle button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-apps-2-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
              <div class="home__container container grid">
                <img src="landing page/assets/sop jelly ball.png" alt="home image" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        Fresh Jelly
                        <div>
                            <img src="landing page/assets/produk bulat.png" alt="home image">
                            Ball Soup
                        </div>
                    </h1>

                    <p class="home__description">
                    Infinite Deliciousness, Explosive Sensation In Every Bite
                    </p>

                    <a href="shop.php" class="button">
                        Order Now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
              </div>

              <img src="landing page/assets/garis.png" alt="home image" class="home__img-garis-1">  
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
            <div class="about__container container">
                <div class="about__data">
                <h2 class="section__title about__title">
                    <div>
                    About Us
                    <img src="landing page/assets/jelly.png" alt="about image">
                    </div>
            </h2>
            <p class="about__description">
            YAM JELLYJOY embodies the essence of our academic odyssey through the realm of entrepreneurship. 
            Beyond imparting theoretical business acumen, the course ignited our passion to transform imaginative sparks into tangible endeavors. 
            Guided by seasoned mentors and fueled by the camaraderie among peers, we embarked on a journey to establish a boutique enterprise centered around novel creations that invigorate and nourish.
            </p>
        </div>
        <div class="team__photos">
            <div class="team__member box">
                <img src="landing page/assets/adel.jpg" alt="Team Member 1" class="team__photo">
                <p class="team__name">Adelia Langitan</p>
                <p class="team__nim">220211060002</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/berNadyaa.jpg" alt="Team Member 2" class="team__photo">
                <p class="team__name">Nadya Tangkere</p>
                <p class="team__nim">220211060020</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/tesaa.jpg" alt="Team Member 3" class="team__photo">
                <p class="team__name">Yuliet Sompotan</p>
                <p class="team__nim">220211060048</p>
            </div>
            <div class="team__member box">
                <img src="landing page/assets/angii.jpg" alt="Team Member 4" class="team__photo">
                <p class="team__name">Anggraini Sumarno</p>
                <p class="team__nim">220211060145</p>
        </div>
    </div>
</section>
                <img src="landing page/assets/bunga 1.png" alt="about image" class="about">
            </div>

            <img src="landing page/assets/bunga 2.png" alt="about image" class="about__bunga">
            </section>

            <!--==================== REVIEWS ====================-->
            <section class="reviews section" id="reviews">
            <span class="section__subtitle">Best Reviews</span>
            <h2 class="section__title">What our customers says..</h2>

                <div class="reviews__container container grid">
                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Flouresita Udampo</h3>
                        <span class="reviews__description">This Jelly Ball Soup is truly delicious. It consists of a mixture of fruit, jelly, and milk</span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </article>
                    </article>

                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Michael Manoppo</h3>
                        <span class="reviews__description">Super creamy because of produced by milk mixed with fruit and jelly</span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </article>

                    <article class="reviews__card">
                        <img src="landing page/assets/produk 2.png" alt="reviews image" class="reviews__img">

                        <h3 class="reviews__name">Kerenhapukh Waworuntu</h3>
                        <span class="reviews__description">A perfect combination of fruit and jelly!</span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                    </article>
                </div>
            </section>

            <!--==================== RECENTLY ====================-->
            <section class="recently section" id="recently">
                <div class="recently__container container grid">
                    <div class="recently__data">
                        <span class="section__subtitle">Recently Added</span>
                        <h2 class="section__title">
                            Jelly Ball<br>
                            Soup
                        </h2>

                        <p class="recently__description">
                        Feel the freshness and deliciousness in every bite. 
                        Hurry up and enjoy the sweet and fresh sensation of our Soup Jelly Ball!
                        </p>

                        <a href="shop.php" class="button">
                            Order Now <i class="ri-arrow-right-line"></i>
                        </a>

                        <img src="landing page/assets/buah naga.png" alt="recently image" class="recently__data-img">
                    </div>

                    <div class="bottom-data">
                    <div class="orders">
        <div class="orders__header">
            <i class='bx bx-receipt'></i>
            <h3>Recent Orders</h3>
            <i class='bx bx-filter'></i>
            <i class='bx bx-search'></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($orders as $order):
                ?>
                <tr>
                    <td><p><?php echo htmlspecialchars($order['customer_name']); ?></p></td>
                    <td><?php echo htmlspecialchars($order['order_date']); ?></td>
                    <td><span class="status <?php echo strtolower(htmlspecialchars($order['status'])); ?>"><?php echo htmlspecialchars($order['status']); ?></span></td>
                    <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
                </div>

                 <img src="landing page/assets/buah apel.png" alt="recently image" class="recently__apel"> 
                 <img src="landing page/assets/buah naga.png" alt="recently image" class="recently__naga"> 
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="landing page/img/logo yamjellyjoy.png" alt="logo image">
                        YAM JELLYJOY
                    </a>

                    <p class="footer__description">
                    Taking care of our body isn't just about the food we eat.<br> 
                    We also need a healthy intake of fruits for our overall well-being.<br>
                    Why not treat yourself to a delightful dessert that combines both?<br>
                    A fruity jelly soup might just be the perfect choice to end your meal on a high note.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Address</h3>

                        <ul class="footer__links">
                            <li class="footer__information">
                                JL. Tonsawang No.16 <br>
                                Karombasan Selatan, Manado 
                            </li>

                            <li class="footer__information">
                                9AM - 8PM
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">Social Media</h3>

                        <ul class="footer__social">
                            <a href="https://www.instagram.com/yam.jellyjoy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </ul>
                    </div>
                </div>
                <img src="landing page/assets/bunga 2.png" alt="footer image" class="footer__bunga">
            </div>

                <span class="footer__copy">
                    &copy; YAM JELLYJOY | All rights reserved
                </span>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="landing page\js\scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="landing page\js\main.js"></script>
    </body>
</html></tr>