<!DOCTYPE>
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Интернет-магазин VELES|Анамегаторы в топливо</title>-->
<!--    <link rel="stylesheet" href="/views/template/css/main.css">-->
<!--    <div id="wrapper">-->
<!--        <div id="header">-->
<!--            <div>-->
<!--                <table>-->
<!--                    <td><a><img src="/views/template/images/home/head.jpg"></a></td>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div id="nav">-->
<!--                <table>-->
<!--                    <tr>-->
<!--                        <td><a href="/" title="На главную">Главная</a></td>-->
<!--                        <!--<td><a href="newsukt.html" title="Продукты">Продукция</a></td>-->
<!--                        <td><a href="use.html" title="информация">Применение</a></td>-->
<!--                        <td><a href="contakt.html" title="Контакты">Контакты</a></td>-->
<!--                    </tr>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</head>-->
<!--<div id="wrapper">-->
<!--    <div id="content">-->
<!--        <div id="lmenu">-->
<!---->
<!--            <ul>-->
<!--                <li><a href="index.phtml" title="На главную"><img src="/views/template/images/home/Logo1.jpg"></a></li>-->
<!--                --><?php //foreach ($this->categories as $item): ?>
<!--                    <li><a href='/catalog/--><?php //echo $item['cat_id'] ?><!--' title="">--><?php //echo $item['cat_name'] ?><!--</a>-->
<!--                    </li>-->
<!--                --><?php //endforeach; ?>
<!--            </ul>-->
<!--        </div>-->
<!---->
<!---->
<!--        --><?//= $this->content ?>
<!---->
<!--        <footer>-->
<!--            <div id="footer">-->
<!--                <div class="contact">-->
<!--                    <h5>Контакты:<br>email: itc.veles@gmail.com<br>тел.: +38 (066) 008-89-96</h5>-->
<!--                </div>-->
<!--                <div class="TM">-->
<!--                    <h6><p>Интернет-магазин VELES 2017</p></h6>-->
<!--                </div>-->
<!--            </div>-->
<!--        </footer>-->
<!--</html>-->

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
                <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>

            <ul class="topnav">
                <li><a href="/"> Главная</a>
                </li>
                <li><a href="blog.html">Новости</a>
                </li>
                <li><a href="contact.html">Контакты</a>
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

        <div class="content-width">
            <div class="client-logos-container">

                <div class="client-logos-title">
                    <span>Наши партнеры</span>
                </div>

                <div id="clients-back"></div>
                <div id="clients-next"></div>

                <div class="carousel">
                    <ul id="clients-carousel" class="column-container">

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo1.png">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo2.png">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo3.png">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo4.png">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo5.png">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="\views\template\images\client-logos\logo6.png">
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

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
                        <li><a href="blog.html">Новости</a>
                        </li>
                        <li><a href="contact.html">Контакты</a>
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

