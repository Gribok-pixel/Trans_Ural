<?php
    require_once 'test_crud.php';
?>

<div class="container">
    <form method="post">

    <div class="mb-3">
        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Название" name="name">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="" placeholder="Цена" name="price">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="" placeholder="Ширина" name="width">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="" placeholder="Высота" name="height">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="" placeholder="Длина" name="length">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>

    </form>
</div>



