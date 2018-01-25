<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Wonde - универсальный бизнес шаблон сайта</title>

    <link href="\views\template\css\styles.css" rel="stylesheet">
    <link href="\views\template\css\font-awesome.css" rel="stylesheet">

    <script type="text/javascript" src="\views\template\js\jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="\views\template\js\common.js"></script>
    <script type="text/javascript" src="\views\template\js\jquery.carousel-main.min.js"></script>
    <script type="text/javascript" src="\views\template\js\jquery.carousel-content.min.js"></script>
    <script type="text/javascript" src="\views\template\js\home-slider-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\carousel-portfolio-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\carousel-blog-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\carousel-testimonials-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\carousel-clients-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\portfolio-blog-slider-settings.js"></script>
    <script type="text/javascript" src="\views\template\js\carousel-clients-settings.js"></script>


</head>

<body class="light-bg home">
<div class="main-container">
    <div class="topbar-outer dark">
        <div class="topbar content-width">
            <div class="table fullheight">
                <div class="table-cell fullheight middle">
                    <div class="logo">
                        <a href="/"><img alt="" src="\views\template\images\topbar\logo_white.png" height="17">
                        </a>
                    </div>
                </div>
            </div>

            <ul class="topsocial">
                <li><a href="#"><i class="fa fa-linkedin-square"></i>
                        <div class="tooltip">LinkedIn</div>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i>
                        <div class="tooltip">Facebook</div>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i>
                        <div class="tooltip">Twitter</div>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus"></i>
                        <div class="tooltip">Google+</div>
                    </a>
                </li>
            </ul>

            <ul class="topnav">
                <li><a href="/"> Главная</a>
                </li>
                <li><a href="/catalog/<?php echo rand(1,5)?>">Новости</a>
                </li>
                <li><a href="/contact">Контакты</a>
                </li>
            </ul>

            <a href="#" class="mobilenav-click">
                <div class="mobilenav-button-container">
                    <div class="mobilenav-button-inner">
                        <div class="mobilenav-button"></div>
                    </div>
                </div>
            </a>

            <div class="mobilenav-container">
                <ul class="mobilenav">
                </ul>
            </div>
        </div>
    </div>

    <div class="home-banner dark">

    </div>

    <!--head_end-->

    <?= $this->content ?>

    <!--main_content_end-->

    <div class="footer-container">

        <div class="spacer"></div>
        <?php if(isset($this->partners)):?>
        <div class="content-width">
            <div class="client-logos-container">

                <div class="client-logos-title">
                    <span>Наши партнеры</span>
                </div>

                <div id="clients-back"></div>
                <div id="clients-next"></div>

                <div class="carousel">
                    <ul id="clients-carousel" class="column-container">

                        <?php foreach ($this->partners as $item):?>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="<?php echo $item['pt_img']?>">
                                </div>
                            </div>
                        </li>
                       <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="footer-infobar">
            <div class="content-width">
                <!-- Text -->
                Мы предоставляем только проверенную информацию. Все права защищены.
            </div>
        </div>

        <div class="footer">
            <div class="content-width">


                <!-- Four Columns -->

                <div class="column-container">

                    <div class="column-one-fourth">


                        <h3>Ждем Вас</h3>

                        <ul class="footer-social">
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i><div class="tooltip">YouTube</div></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i><div class="tooltip">Pinterest</div></a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="footer-lower-container">

                    <ul class="footer-lower">
                        <li><a href="/">Главная</a>
                        </li>
                        <li><a href="/catalog/<?php echo rand(1,5)?>">Новости</a>
                        </li>
                        <li><a href="/contact">Контакты</a>
                        </li>
                    </ul>

                    <div class="footer-copyright">
                        &copy; 2016 | Wonde - универсальный бизнес шаблон сайта
                    </div>

                </div>

                <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>

            </div>
        </div>

    </div>

</div>

</body>

</html>