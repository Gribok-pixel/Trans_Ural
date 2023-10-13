<?php

require_once 'database/crud.php';


?>


<?php
$item = select($routs[2]);
?>


<div class="wrapper">
<div class="container">

    <h4 class="mt-5"><?= $item['name']; ?></h4>

    <div class="row oneBoard">

        <div class="col one-furniture-image">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= "../" . $item['image']; ?>" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">

            <!-- <div>
                <h3 class="mt-5">Доска обрезная 1, 2 сорт</h3>
                <div class="mt-1">Предлагаем обрезную доску естественной влажности хвойных и лиственных пород любых размеров и сечений по цене от 11 000 руб./1м3</div>
                <h3 class="mt-4">Доставка и оплата</h3>
                <div class="mt-1">Доставка в регионы от 25м3 осуществляется еврофурой. Работаем с НДС/ без НДС</div>
                <div class="mt-2">- Любая удобная форма оплаты</div>
                <h5 class="mt-1">- Работаем с ЕГАИС</h5>
                <div class="mt-3">Индивидуальный подход к каждому клиенту.</div>
                <div class="mt-2 mb-5">В работе мы всегда готовы проявить гибкость и предложить удобные условия сервиса своим клиентам по разумной цене</div>
            </div> -->

            <div class="one-furniture-card">

                <div class="one-furniture-card-top">
                    <div class="product-cod">Код товара: 489031</div>
                    <div class="product-price">
                        <div><?= $item['price']; ?> &#8381;</div>
                        <!-- <div class="vmesto-price"><span class="vmesto">Вместо</span><i><?= $item['old_price']; ?></i></div> -->
                        <!-- <div>-20%<i class="bi bi-tags" style="font-size: 1.3rem;"></i></div> -->
                    </div>
                    <div class="installment-payment">В рассрочку от<span>2 000 &#8381;/мес.</span></div>
                    <div class="one-furniture-card-btn">
                        <div class="one-furniture-card-buy">КУПИТЬ В <i>1</i> КЛИК</div>
                        <div class="ask-questions">ЗАДАТЬ ВОПРОС</div>
                    </div>
                </div>

                <div class="one-furniture-card-bottom">
                    <div class="vashego-goroda">Данный товар не представлен в магазинах вашего города</div>
                    <span>Размеры</span>
                    <div class="one-furniture-card-size furniture-size">
                        <div>
                            <p>Длина</p>
                            <?= $item['length']; ?> мм
                        </div>
                        <div>
                            <p>Ширина</p>
                            <?= $item['width']; ?> мм
                        </div>
                        <div>
                            <p>Высота</p>
                            <?= $item['height']; ?> мм
                        </div>
                    </div>
                    <div class="one-furniture-color">
                        <!-- <div class="there-color">
                            <div class="there-color-radius"></div>
                            <div class="there-color-name">Цвет <br>белый</div>
                        </div> -->
                        <div class="change-color">
                            <div class="color-slider">slider</div>
                        </div>
                    </div>
                    <div class="all-collection">
                        <a href="">Смотреть всю коллекцию<span>&emsp;&raquo;</span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row-6 mt-5 mb-5">
        <div class="col-xl-7">
            <div class="one-page-services">
                <div class="one-page-services-item">
                    <div class="one-page-services-icon"><i class="bi bi-droplet" style="font-size: 1.9rem; color: #444;"></i></div>
                    <div class="one-page-services-text">Экологически чистые материалы</div>
                </div>
                <div class="one-page-services-item">
                    <div class="one-page-services-icon"><i class="bi bi-truck-flatbed" style="font-size: 1.9rem; color: #444;"></i></div>
                    <div class="one-page-services-text">Удобная доставка в ваш город</div>
                </div>
                <div class="one-page-services-item">
                    <div class="one-page-services-icon"><i class="bi bi-chat-heart" style="font-size: 1.9rem; color: #444;"></i></div>
                    <div class="one-page-services-text">Честные отзывы о товаре</div>
                </div>
                <div class="one-page-services-item">
                    <div class="one-page-services-icon"><i class="bi bi-wallet2" style="font-size: 1.9rem; color: #444;"></i></div>
                    <div class="one-page-services-text">Возможна оплата картой</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="one-furniture-menu">
            <ul>
                <li class="one-furniture-menu-li" id="1">ОПИСАНИЕ</li>
                <li class="one-furniture-menu-li" id="2">ХАРАКТЕРИСТИКИ</li>
                <li class="one-furniture-menu-li" id="3">ИНСТРУКЦИИ</li>
                <li class="one-furniture-menu-li" id="4">ОТЗЫВЫ О ТОВАРЕ (0)</li>
                <li class="one-furniture-menu-li" id="5">ВОПРОСЫ О ТОВАРЕ (0)</li>
            </ul>
        </div>

        <div class="furniture-menu-content">

            <div style="display: block;" class="one-furniture-desc">
                <p>
                    Наша мебель производится только из экологичных, надежных и качественных материалов преимущественно ведущих европейских производителей. Мебель сертифицирована. Вся фурнитура для сборки и крепления в комплекте. Срок службы мебели - 20лет, гарантийный срок эксплуатации - 2года.
                </p>
                <p>
                    Описание: Стол с секцией и настенной панелью позволит вам с удобством погрузиться в рабочий процесс. Секция со столом гармонично сочетается с другими изделиями данной коллекции, создавая единую стилистическую композицию, или может использоваться как самостоятельный элемент интерьера. Глянцевые фасады с превосходным качеством поверхности, стойкой к ультрафиолетовому излучению, создают иллюзию большого пространства и визуально меняют архитектуру комнаты. Фасады для удобства оснащены механизмами PUSH open, которые откроют дверцу простым нажатием. Столешница не будет загромождена, так как на открытой полке можно расставить необходимые мелочи. Мы предусмотрели отверстие под кабель-канал, чтобы вы убрали провода. Чтобы провода не мешались под столом, на панели под столешницей предусмотрен ещё один кабель-канал. Дополнительно можно приобрести встраиваемую в столешницу USB-розетку для зарядки ваших любимых гаджетов. Размер полки 1180*190*22мм.
                </p>
                <p>
                    Дополнительно комплектуется:
                    - USB-розеткой.
                </p>
                <p>
                Материалы и характеристики:
                Фасад - глянцевая ЛМДФ 18мм. Отделка "Белый Бриллиант".
                Корпус - структурированная ЛДСП 16мм. Отделка под натуральное светлое дерево "Туя" структура WoodLine от компании Interprint (Германия).
                </p>
            </div>

            <div style="display: none;" class="one-furniture-characteristics">
                <p>
                    Коллекция _________________________ Гостиные Chelsea белая Молодежные Chelsea белая
                    <br>Стиль _____________________________ Современный
                    <br>Оттенок ___________________________ Светлый
                    <br>Цвет ______________________________ Белый Светлое дерево
                </p>
                <p>
                    Глубина (Ширина) __________________ 279 мм
                    <br>Длина _____________________________ 332 мм
                    <br>Высота ____________________________ 132 мм
                    <br>Производитель _____________________ TRANS URAL Сервис, Россия
                    <br>Производственный код ______________ E8C-01.FB/FG
                </p>
            </div>

            <div style="display: none;" class="one-furniture-instructions">ИНСТРУКЦИИ</div>

            <div style="display: none;" class="one-furniture-reviews">ОТЗЫВЫ</div>

            <div style="display: none;" class="one-furniture-questions">ВОПРОСЫ</div>

        </div>

    </div>

</div>
</div>



<div class="modal-furniture-order">
    <form method="POST" action="boardOrder.php">
        <div class="modal-order-close"><i class="bi bi-x-lg" style="font-size: 1.8rem;"></i></div>
        <div class="modal-order-text">Оставьте заявку и мы свяжемся с вами</div>
        <div class="mb-3">
            <input type="email" class="form-control input_one" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
            <input type="phone" class="form-control input_one" id="exampleInputPassword1" placeholder="Телефон" name="number">
        </div>
        <div class="mb-3">
            <input type="hidden" value="<?=$item['id']?>" name="board_id">
        </div>
        <div class="mb-3">
            <input type="hidden" value="<?=$item['name']?>" name="board_name">
        </div>
        <button type="submit">Отправить заявку</button>
    </form>
</div>





