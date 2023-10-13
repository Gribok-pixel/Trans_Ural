<?php

require_once 'database/crud.php';

?>

<div class="main">
    <div class="container mb-5">
    <h2 class="text-center mt-5" style="font-weight: 300;">САДОВАЯ МЕБЕЛЬ, TRANS URAL, ИЗ ДЕРЕВА <br>СОБРАННАЯ МАСТЕРОМ В РУЧНУЮ </h2>
        <div class="row mt-4">
            <!-- <div class="order-none">Заказ оформлен успешно</div> -->

            <?php $arr = selectAllFurniture(); ?>
            <?php foreach($arr as $value): ?>

                <div class="col mt-4">
                    <div class="furniture-card">
                        
                        <div class="furniture-thumb">
                            <div class="swiper swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $value['id']; ?>"><img src="<?= $value['image_one']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $value['id']; ?>"><img src="<?= $value['image_two']; ?>" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="<?= "/" . $routs[1] . "/" . $value['id']; ?>"><img src="<?= $value['image_three']; ?>" alt=""></a>
                                    </div>
                                </div>
                                <!-- <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                        
                        <div class="furniture-details">
                            <h4><a href="<?= "/" . $routs[1] . "/" . $value['id']; ?>"><?= $value['name']; ?></a></h4>
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
                                    <a href="<?= "/" . $routs[1] . "/" . $value['id']; ?>">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>