<div class="wrapper">

    <div class="">
        <div class="container-my">
            <div class="slide" style="background-image: url('image/ideas/ideas1.jpg');">
                <div class="slide-content">
                    <div class="slide-content-title">Оставьте отзыв о товаре в наших соц сетях и получите скидку!</div>
                    <div class="slide-content-text">
                        Вы приобрели мебель в нашем интернет-магазине? Оставьте отзыв и получите скидку до 900 рублей на следующую покупку!
                    </div>
                    <div class="slide-content-btn">
                        <a href="/furniture">В каталог</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/ideas/ideas2.jpg');">
                <div class="slide-content">
                    <div class="slide-content-title">Распродажа - большие скидки до 50%</div>
                    <div class="slide-content-text">
                        Сроки проведения акции: 09.07.20г. — 13.07.20г. Доставка и сборка в черте и за чертой города <br> рассчитывается согласно действующему прайс-листу на услуги.
                    </div>
                    <div class="slide-content-btn">
                        <a href="/furniture">В каталог</a>
                    </div>
                </div>
            </div>
            <div class="slide active" style="background-image: url('image/ideas/ideas7.jpg');">
                <div class="slide-content">
                    <div class="slide-content-title">Распродажа - большие скидки до 50%</div>
                    <div class="slide-content-text">
                        Сроки проведения акции: 09.07.20г. — 13.07.20г. Доставка и сборка в черте и за чертой города <br> рассчитывается согласно действующему прайс-листу на услуги.
                    </div>
                    <div class="slide-content-btn">
                        <a href="/furniture">В каталог</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/ideas/ideas6.jpg');">
                <div class="slide-content">
                    <div class="slide-content-title">Оставьте отзыв о товаре в наших соц сетях и получите скидку!</div>
                    <div class="slide-content-text">
                        Вы приобрели мебель в нашем интернет-магазине? Оставьте отзыв и получите скидку до 900 рублей на следующую покупку!
                    </div>
                    <div class="slide-content-btn">
                        <a href="/furniture">В каталог</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/ideas/ideas5.jpg');">
                <div class="slide-content">
                    <div class="slide-content-title">Распродажа - большие скидки до 50%</div>
                    <div class="slide-content-text">
                        Сроки проведения акции: 09.07.20г. — 13.07.20г. Доставка и сборка в черте и за чертой города <br> рассчитывается согласно действующему прайс-листу на услуги.
                    </div>
                    <div class="slide-content-btn">
                        <a href="/furniture">В каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="container">
    <div class="main-novelties">

        <div class="row">
            <h3 class="mt-5 novelties">Новинки</h3>
            <?php $arr = selectLimitFurniture(); ?>
            <?php foreach($arr as $value): ?>

            <div class="col mt-1">
                <div class="furniture-card">
                    
                    <div class="furniture-thumb">
                        <div class="swiper swiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?= "/" . "furniture" . "/" . $value['id']; ?>"><img src="<?= $value['image_one']; ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?= "/" . "furniture" . "/" . $value['id']; ?>"><img src="<?= $value['image_two']; ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?= "/" . "furniture" . "/" . $value['id']; ?>"><img src="<?= $value['image_three']; ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    
                    <div class="furniture-details">
                        <h4><a href="#"><?= $value['name']; ?></a></h4>
                        <span>Цена</span>
                        <div class="furniture-price">
                            <?= $value['price']; ?> &#8381; 
                            <span><?= $value['old_price']; ?> &#8381;</span>
                        </div>
                        <h5>Размеры</h5>
                        <div class="furniture-size">
                            <div>
                                <p>Длина</p>
                                <?= $value['length']; ?> мм
                            </div>
                            <div>
                                <p>Ширина</p>
                                <?= $value['width']; ?> мм
                            </div>
                            <div>
                                <p>Высота</p>
                                <?= $value['height']; ?> мм
                            </div>
                        </div>
                        <div class="furniture-bottom-details">
                            <div class="furniture-links">
                                <a href="<?= "/" . "furniture" . "/" . $value['id']; ?>">КУПИТЬ</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            

            <?php endforeach; ?>
            <div class="col mt-4"></div>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="our-services">
        <div class="our-services-item our-services-delivery">
            <div class="our-services-icon"><i class="bi bi-truck" style="font-size: 2.8rem; color: #444;"></i></div>
            <div class="our-services-title text-center">Доставляем заказ до дома <br> от 3000 рублей</div>
        </div>
        <div class="our-services-item our-services-guarantee">
            <div class="our-services-icon"><i class="bi bi-shield-check" style="font-size: 2.8rem; color: #444;"></i></div>
            <div class="our-services-title text-center">На всю продукцию предоставляется <br> гарантия на 5 лет</div>
        </div>
        <div class="our-services-item our-services-range">
            <div class="our-services-icon"><i class="bi bi-airplane" style="font-size: 2.8rem; color: #444;"></i></div>
            <div class="our-services-title text-center">Широкий ассортимент корпусной мебели <br> от крупнейших поставщиков</div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="bestseller">
        
        <div class="row">
            <h3 class="mt-4">Хит продаж</h3>
            <?php $list = selectLimitBoard(3); ?>
            <?php foreach($list as $item): ?>

                <div class="col mt-2">
                    <div class="furniture-card">
                        
                        <div class="furniture-thumb">
                            <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                </div>
                                <!-- <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        
                        <div class="furniture-details">
                            <h4><a href="#"><?= $item['name']; ?></a></h4>
                            <span>Сорт</span>
                            <div class="furniture-price">
                                <!-- <?= $value['price']; ?> &#8381; 
                                <span><?= $value['old_price']; ?> &#8381;</span> -->
                                <i>Лиственница</i> &nbsp; &nbsp; А3
                            </div>
                            <h5>Размеры</h5>
                            <div class="furniture-size">
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
                            <div class="furniture-bottom-details">
                                <div class="furniture-links">
                                    <a href="<?= "/" . "boards" . "/" . $item['id']; ?>">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            <?php endforeach; ?>
            <div class="col mt-4"></div>
        </div>

    </div>
</div>

<div class="container mt-5">
    <div class="recommendations">
        
        <div class="row">
            <h3 class="mt-4">Рекомендуем</h3>
            <?php $list = selectLimitBoard(4); ?>
            <?php foreach($list as $item): ?>

                <div class="col mt-2">
                    <div class="furniture-card">
                        
                        <div class="furniture-thumb">
                            <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . "boards" . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                </div>
                                <!-- <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        
                        <div class="furniture-details">
                            <h4><a href="#"><?= $item['name']; ?></a></h4>
                            <span>Сорт</span>
                            <div class="furniture-price">
                                <!-- <?= $value['price']; ?> &#8381; 
                                <span><?= $value['old_price']; ?> &#8381;</span> -->
                                <i>Лиственница</i> &nbsp; &nbsp; А3
                            </div>
                            <h5>Размеры</h5>
                            <div class="furniture-size">
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
                            <div class="furniture-bottom-details">
                                <div class="furniture-links">
                                    <a href="<?= "/" . "boards" . "/" . $item['id']; ?>">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            <?php endforeach; ?>
            <div class="col mt-4"></div>
        </div>

    </div>
</div>

<!-- <div class="container mt-5 mb-5">
<h3>Идеи для вдохновения</h3>
    <div class="ideas">

        <div class="swiper swiper-ideas">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas"></div>
                </div>
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas1"></div>
                </div>
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas2"></div>
                </div>
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas3"></div>
                </div>
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas4"></div>
                </div>
                <div class="swiper-slide">
                    <div class="ideas-img-container ideas5"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="ideas-swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>

    </div>
</div> -->

<div class="container">
    <div class="last-news">
        <h3>Последние новости</h3>
        <div class="news-conteiner">

            <div class="news-card">
                <div class="news-card-img">
                    <a href="#" class="news-image"><img src="image/background/background3.jpg" alt=""></a>
                    <a href="#" class="news-btn">Смотреть</a>
                </div>
                <div class="news-card-content">
                    <div class="news-card-content-date">
                        2020-07-09 08:12:38
                    </div>
                    <div class="news-card-content-title">
                        <a href="">Шкафы специального назначения</a>
                    </div>
                    <div class="news-card-content-text">
                        За последнее столетие под влиянием прогресса шкаф как предмет и как понятие стал применяться в новых областях
                    </div>
                    <div class="ellipsis">...</div>
                </div>
            </div>

            <div class="news-card">
                <div class="news-card-img">
                    <a href="#" class="news-image"><img src="image/background/background5.jpg" alt=""></a>
                    <a href="#" class="news-btn">Смотреть</a>
                </div>
                <div class="news-card-content">
                    <div class="news-card-content-date">
                        2020-07-09 08:12:38
                    </div>
                    <div class="news-card-content-title">
                        <a href="">Материалы для изготовления шкафа</a>
                    </div>
                    <div class="news-card-content-text">
                        Шкаф - мебельное изделие (преимущественно с дверками, с ящиками или без них) для хранения предметов различного функционального назначения.
                    </div>
                    <div class="ellipsis">...</div>
                </div>
            </div>

        </div>           
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="text-about-us">
        <p>Мебель (фр. meuble, от лат. mobile) — совокупность передвижных или встроенных изделий для обстановки жилых и общественных помещений и различных зон пребывания человека. Предназначается для сидения, лежания, приготовления пищи, выполнения письменных и других работ, разделения помещения на отдельные зоны.</p>
        <p>К мебели относятся столы, стулья и табуреты, комоды, кровати, кресла и диваны, шкафы различных типов и назначений, полки и некоторые другие виды. Мебель может выпускаться как в виде отдельного предмета мебели, так и в составе набора или гарнитура.</p>
        <p>Производство мебели является наиболее проблемным из всех известных видов производственных процессов, в связи с тем, что в большинстве случаев невозможно продавать (производить) только лишь серийные изделия.</p>
        <p>Оно оснащено оборудованием, предназначенным для выполнения как узкоспециальных, так и широкого применения технологических операций - как правило, дорогостоящим и крупногабаритным, потребляющим большое количество электроэнергии.</p>
    </div>
</div>




