<?php

require_once 'database/crud.php';

?>




<div class="main">
    <div class="container mb-5">
        
    <h2 class="text-center mt-5" style="font-weight: 300;">ДОСКА, TRANS URAL, КАЧЕСТВА А 1 <br> </h2>

        <div class="row">
            <div class="order-none">Заказ оформлен успешно</div>
            <?php $list = selectAll(); ?>
            <?php foreach($list as $item): ?>

                <div class="col mt-4">
                    <div class="furniture-card">
                        
                        <div class="furniture-thumb">
                            <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $item['id']; ?>"><img src="<?= $item['image']; ?>" alt=""></a>
                                    </div>
                                </div>
                                <!-- <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        
                        <div class="furniture-details">
                            <h4><a href="<?= "/" . $routs[1] . "/" . $item['id']; ?>"><?= $item['name']; ?></a></h4>
                            <span>Сорт</span>
                            <div class="furniture-price">
                                <!-- <?= $value['price']; ?> &#8381; 
                                <span><?= $value['old_price']; ?> &#8381;</span> -->
                                <i>Сосна</i> &nbsp; &nbsp; А3
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
                                    <a href="<?= "/" . $routs[1] . "/" . $item['id']; ?>">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>

    </div>
</div>



<!-- <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div> -->