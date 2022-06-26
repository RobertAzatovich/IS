<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('pages/styles.css') }}">
</head>
<body class="page closed-menu">
<nav class="nav vertical-menu-wrapper">
    <div class="vertical-menu-logo">
        <div>МЕНЮ</div>
        <span class="open-menu-btn"><hr><hr><hr></span>
    </div>
    <ul class="nav__list vertical-menu">
        <li class="nav__item"><a href="{{ route('defect.index') }}" class="nav__link">Дефектовочные ведомости</a> </li>
        <li class="nav__item"><a href="{{ route('order.index') }}" class="nav__link">Заказ-наряды</a> </li>
        <li class="nav__item">
            <a href="#" class="nav__link nav__link-icon dropdown__btn">
                Справочники
                <span class="link-icon"></span>
            </a>
            <div class="dropdown__menu">
                <ul class="nav__item-submenu">
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="{{ route('auto_brand.index') }}">Марки авто</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-cars.html">Автомобили</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-tire-size.html">Размеры шин</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-tire-type.html">Типы шин</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-tire-brand.html">Бренды шин</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-tire.html">Шины</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-type-acb.html">Типы акб</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-brand-acb.html">Бренды акб</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-acb.html">АКБ</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-stock.html">Склады</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-cat-product.html">Категории товаров</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-brand-product.html">Бренды товаров</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-product.html">Товары</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-type-product.html">Типы услуг</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-services.html">Услуги</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav__item">
            <a href="#" class="nav__link nav__link-icon dropdown__btn">
                Аналитика
                <span class="link-icon"></span>
            </a>
            <div class="dropdown__menu">
                <ul class="nav__item-submenu">
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="#">Оборачиваемость склада</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="#">Автомобиль</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-tire.html">Шины</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-acb.html">АКБ</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-product.html">Товары</a>
                    </li>
                    <li class="nav__item-submenu__item">
                        <a class="nav__item-submenu__link" href="directory-services.html">Услуги</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav__item"><a href="#" class="nav__link">Администрирование</a> </li>
        <li class="nav__item"><a href="#" class="nav__link">Пользователь</a> </li>
        <hr />
        <li class="nav__item"><a href="#" class="nav__link">Настройки</a> </li>
        <li class="nav__item"><a href="index.html" class="nav__link">Выход</a> </li>
    </ul>
</nav>

<div class="content-wrapper">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{ asset('scripts/script.js') }}"></script>
</body>
</html>
