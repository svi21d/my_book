<?php
require_once "/Users/vutang/PhpstormProjects/пособник/шапка_подвал/head.php";
require_once "/Users/vutang/PhpstormProjects/пособник/шапка_подвал/header.php";
?>

<!--2 блок -->
<div class="container-fluid">

    <!-- Создаю общий Flex контейнер -->
    <div class="d-flex flex-xxl-row flex-xl-row flex-column">

        <!-- ПаНЕЛЬ НАВИГАЦИИ появляется от xl (>=1200) до xxl (>=1400)-->
        <div class="order-xxl-3 order-xl-3 order-1 col-xxl-2 col-xl-2 px-xxl-2 px-xl-2 px-3 mp_MenuNavXl MenuDecoration">
            <div class="sticky-top pt-4">
                <strong class="my-2 pb-2 border-bottom">
                    <font>Навигационное меню</font>
                </strong>
                <nav class="navbar-nav">
                    <ul class="navbar-nav pt-2">
                        <li class="nav-item">
                            <a href="">Контейнеры</a>
                            <ul class="navbar-nav ms-4"> <!-- Разобраться как сделать отступ без margin-start-->
                                <li class="nav-item">
                                    <a href="">Контейнер</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">Адаптивные контейнеры</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">Жидкий контейнер</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Система сеток</a>
                            <ul class="navbar-nav ms-4">
                                <li class="nav-item">
                                    <a href="">Размеры сеток</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">Ряд столбцов</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">Вложенность</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> <!-- панель навигации -->

        <div class="d-flex flex-xxl-row flex-column order-xxl-1 order-xl-1 order-2 col-xxl-10 col-xl-10">
            <!--ОСНОВНАЯ ЧАСТЬ (ТЕКСТ) -->
            <div class="order-xxl-2 order-2 col-xxl-10 col-xl-12 col-12 pt-xxl-4">
                <!-- блок с определениями контейнера и хранящимися в нем блоками с примерами -->
                <div class="container-fluid">
                    <h2 id="osnovnoyText" class="">Контейнеры</h2>
                    <p>
                        Контейнеры используются для размещения внутри них содержимого, и доступны два класса
                        контейнеров:
                    </p>
                    <ol>
                        <li>
                            <p>
                                Класс <span class="word_text">.container</span> предоставляет адаптивный
                                контейнер
                                фиксированной ширины.
                            </p>
                        </li>
                        <li>
                            <p>
                                Класс <span class="word_text">.container-fluid</span> предоставляет контейнер
                                полной
                                ширины, охватывающий всю область
                                просмотра.
                            </p>
                        </li>
                    </ol>

                    <!--Блок "Обычный контейнер"-->
                    <div class="container-fluid">
                        <h2 id="osnovnoyText" class="">Контейнер</h2>
                        <p>
                            По умолчанию класс <span class="word_text">.container</span> является адаптивным
                            контейнером фиксированной ширины, что означает, что
                            его максимальная ширина
                            max-width изменяется в каждой контрольной точке.
                        </p>
                        <!-- Пример контейнер-->
                        <div class="container border">
                            <div class="container border my-2  bd-highlight" style="height: 60px">
                                <p class="text-center pt-3">
                                    Пример .container
                                </p>
                            </div>
                        </div>

                        <!-- Пример "Контейнер" текст-->
                        <div class="FontWCod">
                            <ul class="navbar-nav FontWCod">
                                <li class="nav-item">
                                    &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                            class="class-bootstrap">container</span>"&gt;
                                </li>
                                <li>
                                    ...
                                </li>
                                <li class="nav-item">
                                    &lt/<span class="tag">div</span>&gt;
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Блок "Адаптивный контейнер"-->
                    <div class="container-fluid">
                        <h2 id="osnovnoyText" class="">Адаптивные контейнеры</h2>
                        <p>
                            Адаптивные контейнеры позволяют указывать класс шириной 100%, пока не будет достигнута
                            указанная
                            контрольная точка,
                            после чего мы применяем max-width для каждой из более высоких контрольных точек.
                            Например, <span class="word_text">.container-sm</span> будет иметь ширину в 100% до тех пор,
                            пока не будет достигнута контрольная точка sm, где он будет масштабироваться уже с
                            помощью md, lg, xl и xxl.
                        </p>

                        <!-- Пример "Адаптивный контейнер" текст-->
                        <ul class="navbar-nav FontWCod">
                            <li class="nav-item">
                                &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container-sm</span>"&gt;Ширина 100% до small
                                breakpoint&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container-md</span>"&gt;Ширина 100% до medium
                                breakpoint&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container-lg</span>"&gt;Ширина 100% до large
                                breakpoint&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container-xl</span>"&gt;Ширина 100% до extra large
                                breakpoint&lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container-xxl</span>"&gt;Ширина 100% до extra extra
                                large
                                breakpoint&lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!--Блок "Жидкий контейнер"-->
                    <div class="container-fluid">
                        <h2 id="osnovnoyText" class="">Жидкий контейнер</h2>
                        <p>
                            Класс <span class="class-bootstrap">.container-fluid</span> позволяет создать контейнер
                            полной
                            ширины, охватывающего всю ширину области
                            просмотра.
                        </p>

                        <!-- Пример "Жидкий контейнер"-->
                        <div class=" border border-2">
                            <div class="container-fluid my-2  bd-highlight">
                                <p class="text-center pt-3">
                                    Пример .container-fluid
                                </p>
                            </div>
                        </div>

                        <!-- Пример "Контейнер" текст-->
                        <div class="FontWCod">
                            <ul class="navbar-nav FontWCod">
                                <li class="nav-item">
                                    &lt<span class="tag">div</span><span class="word_class"> class</span>="<span
                                            class="class-bootstrap">container-fluid</span>"&gt;
                                </li>
                                <li>
                                    ...
                                </li>
                                <li class="nav-item">
                                    &lt/<span class="tag">div</span>&gt;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- РЕШИТЬ ВОПРОС С контейнером-флуид-->
                <div class="container-fluid">
                    <h2>Система сеток</h2>
                    <p>
                        Система сеток bootstrap использует ряд контейнеров, строк и столбцов для компоновки
                        и выравнивания контента. Она создана с помощью <span class="word_text">flexbox</span>
                        и полностью адаптивна. Грид система позволяет размещать до 12 столбцов на странице.
                    </p>

                    <!-- Пример сеток -->
                    <div class="container-fluid border border-1 p-3">
                        <div class="container-fluid m-1">
                            <div class="row bd-highlight">
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-1
                                </div>
                            </div>
                            <div class="row bd-highlight">
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-4
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-4
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-4
                                </div>
                            </div>
                            <div class="row bd-highlight">
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-4
                                </div>
                                <div class="col-8 m-1 grid_table bd-highlight">
                                    .col-8
                                </div>
                            </div>
                            <div class="row bd-highlight">
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-6
                                </div>
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-6
                                </div>
                            </div>
                            <div class="row bd-highlight">
                                <div class="col m-1 grid_table bd-highlight">
                                    .col-12
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример сеток (текстом)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                При помощи &lt<span class="tag">div</span> <span
                                        class="word_class">class</span>="<span
                                        class="class-bootstrap">col-1</span>"&gt;.col-1&lt/<span
                                        class="tag">div</span>&gt;
                                заполняем сетку одинаковыми блоками размером 1.
                            </li>
                            <li class="nav-item">
                                При помощи &lt<span class="tag">div</span> <span
                                        class="word_class">class</span>="<span
                                        class="class-bootstrap">col-4</span>"&gt;.col-4&lt/<span
                                        class="tag">div</span>&gt;
                                заполняем сетку одинаковыми блоками размером 4.
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">col-4</span>"&gt;.col-4&lt/<span
                                        class="tag">div</span>&gt;
                                и
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">col-8</span>"&gt;.col-8&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">col-6</span>"&gt;.col-6&lt/<span
                                        class="tag">div</span>&gt;
                                и
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">col-6</span>"&gt;.col-6&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">col-12</span>"&gt;.col-12&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Блок "Размеры сеток" -->
                <div class="container-fluid">
                    <h2>Размеры сеток</h2>
                    <p>
                        Система сетки Bootstrap 5 имеет шесть классов:
                    </p>

                    <!-- Размеры сеток (текстом)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-</span> (очень маленькие устройства - ширина
                                экрана
                                менее
                                576px)
                            </li>
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-sm-</span> (маленькие устройства - ширина экрана
                                равна
                                или
                                больше 576px)
                            </li>
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-md-</span> (средние устройства - ширина экрана
                                равна
                                или
                                больше 768px)
                            </li>
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-lg-</span> (большие устройства - ширина экрана
                                равна
                                или
                                больше 992px)
                            </li>
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-xl-</span> (устройства xlarge - ширина экрана
                                равна
                                или
                                больше 1200px)
                            </li>
                            <li class="nav-item">
                                <span class="class-bootstrap">.col-xxl-</span> (устройства xxlarge - ширина экрана
                                равна
                                или
                                больше 1400px)
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Блок "Ряд столбцов"-->
                <div class="container-fluid">
                    <h2>Ряд столбцов</h2>
                    <p>
                        При помощи адаптивного класса <span class="word_text">.row-cols-*</span>, чтобы быстро
                        установить количество
                        столбцов, которые лучше всего отображают контент и макет. В то время как обычные классы
                        <span class="word_text">.col-*</span>
                        применяются к отдельным столбцам (<span class="word_text">.col-md-4</span>), классы
                        столбцов
                        строк устанавливаются в
                        родительском <span class="word_text">.row</span> по умолчанию для содержащихся
                        столбцов. С
                        помощью <span class="word_text">.row-cols-auto</span>
                        вы можете придать столбцам их естественную ширину.
                    </p>
                    <p>
                        Использовать эти классы столбцов строк для быстрого создания базовых макетов сетки или
                        для управления макетами карточек и переопределения при необходимости на уровне столбцов.
                    </p>

                    <!-- (1) пример колонки с ограничением 2 колонки в ряд-->
                    <div class="container border">
                        <div class="row row-cols-2 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (1) пример КОДА колонки с ограничением 2 колонки в ряд (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-2</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (2) пример колонки с ограничением 3 колонки в ряд-->
                    <div class="container border">
                        <div class="row row-cols-3 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (2) пример КОДА колонки с ограничением 3 колонки в ряд (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (3) пример колонки с ограничением auto в ряд-->
                    <div class="container border">
                        <div class="row row-cols-auto m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (3) пример КОДА колонки с ограничением auto в ряд (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-auto</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (4) пример колонки с ограничением 4 колонки в ряд-->
                    <div class="container border">
                        <div class="row row-cols-4 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (4) пример КОДА колонки с ограничением 4 колонки в ряд (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-4</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (5) пример колонки с ограничением 4 колонки в ряд, но с 1 колонкой размером 6-->
                    <div class="container border">
                        <div class="row row-cols-4 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-6 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (5) пример КОДА колонки с ограничением 4 колонки в ряд, но с 1 колонкой размером 6 (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-4</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-6</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (6) пример колонки с ограничением колонок, которое меняется при изменении разрешения-->
                    <div class="container border">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (6) пример колонки с ограничением колонок, которое меняется при изменении разрешения (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-1 row-cols-sm-2 row-cols-md-4</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- (7) пример колонки с ограничением 4 колонки в ряд, но с 1 колонкой размером 6-->
                    <div class="container border">
                        <div class="row row-cols-2 row-cols-lg-3 m-2 bd-highlight">
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                            <div class="col-4 col-lg-2 grid_table bd-highlight">
                                колонка
                            </div>
                        </div>
                    </div>

                    <!-- (7) пример КОДА колонки с ограничением 4 колонки в ряд, но с 1 колонкой размером 6 (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row row-cols-2 row-cols-lg-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col</span>"Колонка&lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-lg-2</span>"Колонка&lt;/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Блок "Вложенность"-->
                <div class="container-fluid">
                    <h2>Вложенность</h2>
                    <p>
                        Чтобы вложить контент в сетку по умолчанию, добавим новый класс <span class="word_text">.row</span> и
                        набор колонок <span class="word_text">.col-sm-*</span> внутри существующей колонки
                        <span class="word_text">.col-sm-*</span>.
                        Вложенные ряды должны включать набор колонок, которые добавляется к 12-ти или просто
                        нескольким (не обязательно, чтобы мы использовали все 12 возможных колонок).
                    </p>

                    <!--Вложенность пример-->
                    <div class="container border p-3">
                        <div class="row">
                            <div class="col-sm-3 py-3 bd-highlight">
                                Level 1: .col-sm-3
                            </div>
                            <div class="col-sm-9">
                                <div class="row pt-3">
                                    <div class="col-8 col-sm-6 bd-highlight">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                    <div class="col-4 col-sm-6 bd-highlight">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Вложенность пример (ТЕКСТ)-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">container</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row</span>"&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-sm-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-5">
                                Level 1: .col-sm-3
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-sm-9</span>"&gt;
                            </li>
                            <li class="nav-item ms-5">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">row</span>"&gt;
                            </li>
                            <li class="nav-item ms-5 ps-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-8 col-sm-6</span>"&gt;
                            </li>
                            <li class="nav-item ms-5 ps-4">
                                Level 2: .col-8 .col-sm-6
                            </li>
                            <li class="nav-item ms-5 ps-2">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item ms-5 ps-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">col-4 col-sm-6</span>"&gt;
                            </li>
                            <li class="nav-item ms-5 ps-4">
                                Level 2: .col-4 .col-sm-6
                            </li>
                            <li class="nav-item ms-5 ps-2">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item ms-5">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item ms-4">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt;<span class="tag">/div</span>&gt;
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ПаНЕЛЬ НАВИГАЦИИ появляется от sm (>=576) до lg (>=992)-->
            <div class="order-1 px-2 mp_MenuNav2LG MenuDecoration">
                <div class="sticky-top pt-4">
                    <strong class="my-2 pb-2 border-bottom">
                        <font>Навигационное меню</font>
                    </strong>
                    <nav class="navbar-nav">
                        <ul class="navbar-nav pt-2">
                            <li class="nav-item">
                                <a href="">Контейнеры</a>
                                <ul class="navbar-nav ms-4"> <!-- Разобраться как сделать отступ без margin-start-->
                                    <li class="nav-item">
                                        <a href="">Контейнер</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Адаптивные контейнеры</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Жидкий контейнер</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">Система сеток</a>
                                <ul class="navbar-nav ms-4">
                                    <li class="nav-item">
                                        <a href="">Размеры сеток</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Ряд столбцов</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Вложенность</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- панель навигации -->

            <!--  ТЕСТОВОЕ МЕНЮ (желательно добавить везде, но нужно понять что туда лучше записывать!!!!!!!!! -->
            <div class="order-xxl-1 order-1 col-xxl-2 col-xl-12 px-xxl-4 px-xl-4 px-3">
                <div class="sticky-top pt-4">
                    <h5 class="border-bottom pb-2">Flex заметки</h5>
                    <p>
                        Шпаргала по flex с наглядными примерами <a href="https://tpverstak.ru/flex-cheatsheet/"
                                                                   class="word_href">здесь</a>
                    </p>
                    <p>
                        Для повышения скорости написания кода <a href="https://habr.com/ru/articles/573032/"
                                                                 class="word_href">здесь</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Подключаем footer-->
<?php
require_once "/Users/vutang/PhpstormProjects/пособник/шапка_подвал/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


