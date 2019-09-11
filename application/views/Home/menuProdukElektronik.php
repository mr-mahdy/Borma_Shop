<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- icon -->
    <link rel="shortcut icon" href="">

    <!-- font css -->
    <?= link_tag('assets/font/css/all.min.css'); ?>
    <!-- Materialize css -->
    <?= link_tag('assets/materialize/css/materialize.css'); ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Borma Shop</title>
    <style>
        .collapsible{box-shadow:none;}
        .collapsible-header{outline:none;}
        .collapsible-body{padding:0;}
        #setMenu li a{color:black ;padding-left:20px;font-size:14px;line-height:35px;}
        #setMenu{border-left:3px solid rgb(95, 220, 45);}
        .collapsible-header .fas{margin-top:5px;}
    </style>
</head>
<body>
    <h5 class="white-text section hide-on-med-and-up" style="background-color: rgb(95, 220, 45);text-align:center;">Kategori Elektronik</h5>
    <ul class="collapsible hide-on-med-and-up">
        <li>
            <div class="collapsible-header">Handphone&nbsp;&nbsp;<span class="fas fa-chevron-down"></span> </div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Samsung</a></li>
                    <li><a href="">OPPO</a></li>
                    <li><a href="">Vivo</a></li>
                    <li><a href="">Apple</a></li>
                    <li><a a href="">Sony</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Aksesoris Handphone&nbsp;&nbsp;<span class="fas fa-chevron-down"></span></div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Headset</a></li>
                    <li><a href="">Power Bank</a></li>
                    <li><a href="">Memory Card</a></li>
                    <li><a href="">Charger</a></li>
                    <li><a href="">Gorilla Glass</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Laptop&nbsp;&nbsp;<span class="fas fa-chevron-down"></span></div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Acer</a></li>
                    <li><a href="">Asus</a></li>
                    <li><a href="">Dell</a></li>
                    <li><a href="">Sony</a></li>
                    <li><a href="">Samsung</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Tablet&nbsp;&nbsp;<span class="fas fa-chevron-down"></span></div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Asus</a></li>
                    <li><a href="">Apple</a></li>
                    <li><a href="">Dell</a></li>
                    <li><a href="">Sony</a></li>
                    <li><a href="">Samsung</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Komputer&nbsp;&nbsp;<span class="fas fa-chevron-down"></span></div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Acer</a></li>
                    <li><a href="">Asus</a></li>
                    <li><a href="">Apple</a></li>
                    <li><a href="">Lenovo</a></li>
                    <li><a href="">HP</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Aksesoris Komputer&nbsp;&nbsp;<span class="fas fa-chevron-down"></span></div>
            <div class="collapsible-body">
                <ul id="setMenu">
                    <li><a href="">Hard Disk</a></li>
                    <li><a href="">Monitor</a></li>
                    <li><a href="">Mouse</a></li>
                    <li><a href="">Keyboard</a></li>
                    <li><a href="">RAM</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <!-- JQuery -->
    <script src="<?= base_url('assets/jquery.js') ?>"></script>

    <!-- Materialize js -->
    <script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

    <!-- js custom -->
    <script src="<?= base_url('assets/script.js') ?>">></script>
</body>
</html>