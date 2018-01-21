<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин VELES|Анамегаторы в топливо</title>
    <link rel="stylesheet" href="/views/template/css/main.css">
    <div id="wrapper">
        <div id="header">
            <div>
                <table>
                    <td><a><img src="/views/template/images/home/head.jpg"></a></td>
                </table>
            </div>
            <div id="nav">
                <table>
                    <tr>
                        <td><a href="/" title="На главную">Главная</a></td>
                        <!--<td><a href="produkt.html" title="Продукты">Продукция</a></td>-->
                        <td><a href="use.html" title="информация">Применение</a></td>
                        <td><a href="contakt.html" title="Контакты">Контакты</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</head>
<div id="wrapper">
    <div id="content">
        <div id="lmenu">

            <ul>
                <li><a href="index.phtml" title="На главную"><img src="/views/template/images/home/Logo1.jpg"></a></li>
                <?php foreach ($this->categories as $item): ?>
                    <li><a href='/catalog/<?php echo $item['cat_id'] ?>' title=""><?php echo $item['cat_name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>


        <?= $this->content ?>

        <footer>
            <div id="footer">
                <div class="contact">
                    <h5>Контакты:<br>email: itc.veles@gmail.com<br>тел.: +38 (066) 008-89-96</h5>
                </div>
                <div class="TM">
                    <h6><p>Интернет-магазин VELES 2017</p></h6>
                </div>
            </div>
        </footer>
</html>