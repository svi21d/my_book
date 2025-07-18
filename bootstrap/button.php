<?php
require_once "C:/сетевая папка/пособник/шапка_подвал/head.php";
require_once "C:/сетевая папка/пособник/шапка_подвал/header.php";
?>

<!-- 2 блок -->
<div class="container-fluid">

    <div class="d-flex flex-xxl-row flex-xl-row flex-column">

        <!-- ПаНЕЛЬ НАВИГАЦИИ -->
        <div class="order-xxl-3 order-xl-3 order-1 col-xxl-2 col-xl-3 MenuDecoration ps-xxl-4 ps-xl-4">
            <div class="sticky-top pt-4">
                <strong class="my-2 pb-2 border-bottom">
                    <font>Навигационное меню</font>
                </strong>
                <nav class="navbar-nav">
                    <ul class="navbar-nav pt-2">
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#osnovnoyText">Основной текст</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#zagolovok">Заголовки</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#clssZagolovkov">Классы заголовков</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#UnderZagolovok">Подзаголовки</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#OtobrZag">Отображаемые заголовки</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#VegText">Ведущий текст</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#ViravnText">Выравнивание текста</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#PerenosText">Перенос текста и переполнение</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#reg">Регистр</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#RazmerSrift">Размер шрифта</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#tolsinaText">Толщина текста и курсив</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#hightStr">Высота строки</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#OformText">Оформление текста</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#Monoshir">Моноширинный текст</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#MarkText">Маркировка текста</a>
                        </li>
                        <li class="nav-item indentNavMenu">
                            <a class="tdpNavMenu" href="#ppVod">Пользовательский ввод</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!--  ТЕСТОВОЕ МЕНЮ (желательно добавить везде, но нужно понять что туда лучше записывать!!!!!!!!! -->
        <div class="order-xxl-1 order-xl-1 order-2 col-xxl-2 col-xl-2 px-xxl-4 px-xl-4">
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

        <!-- Основная часть центр -->
        <div class="order-xxl-2 order-xl-2 order-3 col-xxl-8 col-xl-7 col-lg-12 pt-xxl-3 pt-xl-3">

            <!-- блок "Теги кнопок" -->
            <div class="container-fluid">
                <h4>Теги кнопок</h4>
                <p>
                    Классы <span class="word_text">.btn</span> предназначены для использования с элементом <span
                            class="word_text">&ltbutton&gt;</span>.
                    Однако мы можем использовать эти классы в элементах <span class="word_text">&lta&gt;</span> и
                    <span
                            class="word_text">&ltinput&gt;</span>.
                    Приведем примеры возможных значений атрибута <span class="word_text">type</span>:
                </p>
                <ul>
                    <li class="nav-item">
                        <p>
                            <span class="word_text">Button</span> - создает кликабельную кнопку, которая может быть
                            использована
                            в формах или в любом другом
                            месте документа, который требует простой, стандартной кнопки. Кнопка не имеет поведения
                            по умолчанию.
                            При этом на странице могут быть скрипты, активируемые при возникновении определенных
                            событий по кнопке.
                        </p>
                    </li>
                    <li class="nav-item">
                        <p>
                            <span class="word_text"> Submit</span> - кнопка оправляет данные формы на сервер. Это
                            значение по умолчанию, если атрибут не указан или
                            если атрибут динамически изменен на пустое или недопустимое значение.
                        </p>
                    </li>
                    <li class="nav-item">
                        <p>
                            <span class="word_text">Reset</span> - кнопка для очистки формы и возврату полей к
                            исходным значениям.
                        </p>
                    </li>
                </ul>

                <!-- Теги кнопок пример -->
                <div class="container-fluid border p-3">
                    <a class="btn btn-primary p_button" href="#" role="button">Link</a>
                    <button class="btn btn-primary p_button" type="submit">Кнопка</button>
                    <input class="btn btn-primary p_button" type="button" value="Input">
                    <input class="btn btn-primary p_button" type="submit" value="Отправить">
                    <input class="btn btn-primary p_button" type="reset" value="Reset">
                </div>

                <!-- Теги кнопок пример ТЕКСТ -->
                <div class="FontWCod">
                    <ul>
                        <li class="nav-item">
                            &lt<span class="tag">a</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> href</span>="<span class="class-bootstrap">#</span>"
                            <span class="word_class"> role</span>="<span class="class-bootstrap">button</span>"&gt;Link&lt<span class="tag">/a</span>&gt;
                        </li>
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">submit</span>"&gt;Кнопка&lt<span class="tag">/button</span>&gt;
                        </li>
                        <li class="nav-item">
                            &lt<span class="tag">input</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"<span
                                    class="word_class"> value</span>="<span class="class-bootstrap">Input</span>"&gt;
                        </li>
                        <li class="nav-item">
                            &lt<span class="tag">input</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">submit</span>"<span
                                    class="word_class"> value</span>="<span class="class-bootstrap">Отправить</span>"&gt;
                        </li>
                        <li class="nav-item">
                            &lt<span class="tag">input</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">reset</span>"<span
                                    class="word_class"> value</span>="<span class="class-bootstrap">Reset</span>"&gt;
                        </li>
                    </ul>
                </div>
            </div>

            <!-- блок "Примеры" -->
            <div class="container-fluid">
                <h4>Примеры кнопок</h4>
                <p>
                    Для стилизации кнопки используйте класс <span class="word_text">.btn</span>, а затем желаемый стиль.
                    Каждый из стилей служит своей сематической цели, с добавлением нескольких дополнительных
                    функций для большего контроля.
                    Например, <span class="word_text">btn-primary</span> даёт основную кнопку.
                </p>

                <!-- Примеры кнопок -->
                <div class="container-fluid border p-3">
                    <button type="button" class="btn btn-primary p_button">Primary</button>
                    <button type="button" class="btn btn-secondary p_button">Secondary</button>
                    <button type="button" class="btn btn-success p_button">Success</button>
                    <button type="button" class="btn btn-danger p_button">Danger</button>
                    <button type="button" class="btn btn-warning p_button">Warning</button>
                    <button type="button" class="btn btn-info p_button">Info</button>
                    <button type="button" class="btn btn-light p_button">Light</button>
                    <button type="button" class="btn btn-dark p_button">Dark</button>

                    <button type="button" class="btn btn-link p_button">Link</button>
                </div>

                <!-- Примеры кнопок ТЕКСТ -->
                <div class="FontWCod">
                    <ul>
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Primary&lt/<span class="tag">button</span>&gt;
                        </li><!-- Primary -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-secondary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Secondary&lt/<span class="tag">button</span>&gt;
                        </li><!-- Secondary -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-success</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Success&lt/<span class="tag">button</span>&gt;
                        </li><!-- Success -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-danger</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Danger&lt/<span class="tag">button</span>&gt;
                        </li><!-- Danger -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-warning</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Warning&lt/<span class="tag">button</span>&gt;
                        </li><!-- Warning -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-info</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Info&lt/<span class="tag">button</span>&gt;
                        </li><!-- Info -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-light</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Light&lt/<span class="tag">button</span>&gt;
                        </li><!-- Light -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-dark</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Dark&lt/<span class="tag">button</span>&gt;
                        </li><!-- Dark -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-link</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Link&lt/<span class="tag">button</span>&gt;
                        </li><!-- Link -->
                    </ul>
                </div>
            </div>

            <!-- блок "Контур кнопки" -->
            <div class="container-fluid">
                <h4>Контур кнопки</h4>
                <p>
                    Используйте классы <span class="word_text">.btn-outline-*</span> для применения семантического цвета только к контуру кнопки.
                </p>

                <!-- Контур кнопки пример -->
                <div class="container-fluid border p-3">
                    <button type="button" class="btn btn-outline-primary p_button">Primary</button>
                    <button type="button" class="btn btn-outline-secondary p_button">Secondary</button>
                    <button type="button" class="btn btn-outline-success p_button">Success</button>
                    <button type="button" class="btn btn-outline-danger p_button">Danger</button>
                    <button type="button" class="btn btn-outline-warning p_button">Warning</button>
                    <button type="button" class="btn btn-outline-info p_button">Info</button>
                    <button type="button" class="btn btn-outline-light p_button">Light</button>
                    <button type="button" class="btn btn-outline-dark p_button">Dark</button>
                </div>

                <!-- Контур кнопки пример ТЕКСТ -->
                <div class="FontWCod">
                    <ul>
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Primary&lt/<span class="tag">button</span>&gt;
                        </li><!-- Primary -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-secondary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Secondary&lt/<span class="tag">button</span>&gt;
                        </li><!-- Secondary -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-success</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Success&lt/<span class="tag">button</span>&gt;
                        </li><!-- Success -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-danger</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Danger&lt/<span class="tag">button</span>&gt;
                        </li><!-- Danger -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-warning</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Warning&lt/<span class="tag">button</span>&gt;
                        </li><!-- Warning -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-info</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Info&lt/<span class="tag">button</span>&gt;
                        </li><!-- Info -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-light</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Light&lt/<span class="tag">button</span>&gt;
                        </li><!-- Light -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-outline-dark</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Dark&lt/<span class="tag">button</span>&gt;
                        </li><!-- Dark -->
                    </ul>
                </div>
            </div>

            <!-- блок "Размеры кнопок" -->
            <div class="container-fluid">
                <h4>Размеры кнопок</h4>
                <p>
                    Для изменения размера кнопки используем классы <span class="word_text">.btn-lg</span>
                    и <span class="word_text">.btn-sm</span>. Вставляем их в дополнение к другим классам кнопок.
                </p>

                <!-- Размеры кнопок пример -->
                <div class="container-fluid border p-3">
                    <button type="button" class="btn btn-primary btn-sm p_button">Маленькая кнопка</button>
                    <button type="button" class="btn btn-primary p_button">По умолчанию</button>
                    <button type="button" class="btn btn-primary btn-lg p_button">Большая кнопка</button>
                </div>

                <!-- Размеры кнопок пример ТЕКСТ-->
                <div class="FontWCod">
                    <ul>
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary btn-sm</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Маленькая кнопка&lt/<span class="tag">button</span>&gt;
                        </li><!-- Маленькая кнопка -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;По умолчанию&lt/<span class="tag">button</span>&gt;
                        </li><!-- По умолчанию -->
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary btn-sm</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Маленькая кнопка&lt/<span class="tag">button</span>&gt;
                        </li><!-- Большая кнопка -->
                    </ul>
                </div>

                <p>
                    Также можно создать кнопку уровня блока - те, которые охватывают всю ширину родительского элемента
                    - путем добавления <span class="word_text">.btn-block</span>.
                </p>

                <!-- Размеры кнопок пример (блок) -->
                <div class="container-fluid border p-3">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button
                    </button>
                </div>

                <!-- Размеры кнопок пример (блок) ТЕКСТ-->
                <div class="FontWCod">
                    <ul>
                        <li class="nav-item">
                            &lt<span class="tag">button</span><span class="word_class"> class</span>="<span class="class-bootstrap">btn btn-primary btn-lg btn-block</span>" <span
                                    class="word_class"> type</span>="<span class="class-bootstrap">button</span>"&gt;Block level button&lt/<span class="tag">button</span>&gt;
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Подключаем footer-->
<?php
require_once "C:/сетевая папка/пособник/шапка_подвал/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


