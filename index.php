<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopee</title>
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/grid.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'list':
                require_once 'products/list.php';
                break;
            case 'details':
                require_once 'products/details.php';
                break;
            case 'cart':
                require_once 'products/cart.php';
                break;
            case 'delete_cart':
                require_once 'products/delete_cart.php';
                break;
            case 'payment':
                require_once 'products/payment.php';
                break;

            default:
                require_once 'products/list.php';
                break;
        }
    } else {
        require_once 'products/list.php';
    }
    ?>
</body>

</html>