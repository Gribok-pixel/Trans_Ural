<?php
require_once 'include/header.php';
require_once 'database/crud.php';

$routs = explode('/', $_SERVER['REQUEST_URI']);

function req($routs) {
    if ($routs[1] === 'boards' && !isset($routs[2])) {
        return require_once 'boards.php';
    } 

    if ($routs[1] === 'furniture' && !isset($routs[2])) {
        return require_once 'furniture.php';
    }

    if ($routs[1] === 'epoxide' && !isset($routs[2])) {
        return require_once 'epoxide.php';
    }

    if (isset($routs[0]) && !isset($routs[2])) {
        return require_once 'main.php';
    }
    
    if (isset($routs[2]) && $routs[2] === 'boardOrder.php') {
        return require_once 'boardOrder.php';
    }
    if (isset($routs[2]) && $routs[2] === 'furnitureOrder.php') {
        return require_once 'furnitureOrder.php';
    }
    if ($routs[1] === 'boards' && isset($routs[2])) {
        return require_once 'oneBoard.php';
    }
    if ($routs[1] === 'furniture' && isset($routs[2])) {
        return require_once 'oneFurniture.php';
    }
}

req($routs);
?>

<?php
require_once 'include/footer.php';
?>















<!-- <div class="container"> -->
<?php
// echo $_POST['name'] . "<br>";
// echo $_POST['price'] . "<br>";
// echo $_POST['width'] . "<br>";
// echo $_POST['height'] . "<br>";
// echo $_POST['length'] . "<br>";
?>
<!-- </div> -->

<?php
// insert($_POST['name'], $_POST['price'], $_POST['width'], $_POST['height'], $_POST['length']);
?>