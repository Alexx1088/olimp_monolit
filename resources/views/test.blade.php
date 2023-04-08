<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>КДЛ Олимп</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <div class="container flex space-between items-center space-between">
        <div class="header__address ">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
            <p class="text_sf_regular text"> г. Омск<br>
                ул. Карла Маркса, 45
            </p>
        </div>
        <div class="header__phone ">
            <a href="tel:+79835200554" class="text header__phone-number text_sf_regular">+7 983 520 05 54</a>
            <a href="#" class="button button_green button_whatsapp text_sf_regular">Whatsapp</a>
        </div>
    </div>
</header>
<section class="main section">
    <div class="container container-section">
        <h1 class="text_gradient text_analyzes text_sf">Достоверные<br> медицинские<br> анализы</h1>

        <div class="section__address ">
            <a href="#" class="button button_fill_blue text_sf_regular ">Анализы</a>
            <a href="#" class="button button_blue text_sf_regular">Как проехать</a>
        </div>
        <div class="container  text_sf_regular container_properties">
            <p><b>3000+</b><br>видов анализов</p>
            <p>Швейцарские<br>анализаторы Roche</p>
            <p>Профессиональные<br>медсестры</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="text_gradient text_action"><p>Акции</p></div>
</div>

<div class="container flex space-between ">
    <div><img src="{{ asset('images/discount.png') }}" alt="discount"></div>
    <div><img src="{{ asset('images/consultation.png') }}" alt="consultation"></div>
</div>

<div class="container">
    <div class="text_gradient text_action"><p>У нас вы получите:</p></div>
</div>

<div class="container flex space-between">
    <div class="block">
        <p class="text_gradient text_sf_regular block_text ">Доступные<br> цены</p>
        <div class="block_image"><img src="{{ asset('images/union.png') }}" alt="union"></div>
    </div>
    <div class="block"><p class="text_gradient text_sf_regular block_text ">5%<br>скидки<br>пенсионерам</p>
        <div class="block_image"><img src="{{ asset('images/percent.png') }}" alt="percent"></div>
    </div>
    <div class="block"> <p class="text_gradient text_sf_regular block_text ">Доступные<br> цены</p>
        <div class="block_image"> <img class="block_image" src="{{ asset('images/union.png') }}" alt="union"></div></div>
</div>


</body>
</html>
