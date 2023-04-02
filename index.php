<?php
require_once 'Product.php';
require_once 'Category.php';
require_once 'Food.php';
require_once 'Toy.php';
require_once 'Bed.php';
require_once 'User.php';
require_once 'Cart.php';
require_once 'Order.php';


$categoria_cani = new Category(1, 'Cani', 'dog.png');
$categoria_gatti = new Category(2, 'Gatti', 'cat.png');

$giocattolo_cane = new Toy(1, 'Giocattolo per cane', 'a nice gift for your eDog', 10.99, 'dog_toy.jpg', $categoria_cani);
$giocattolo_gatto = new Toy(2, 'Giocattolo per gatto', 'a nice gift for your eCat', 9.99, 'cat_toy.jpg', $categoria_gatti);
$cibo_cane = new Food(3, 'Cibo per cane', 'cibo per cani', 19.99, 'dog_food.jpg', $categoria_cani);
$cibo_gatto = new Food(4, 'Cibo per gatto', 'cibo per gatti', 15.99, 'cat_food.jpg', $categoria_gatti);

// Array contenente tutti i prodotti
$prodotti = [$giocattolo_cane, $giocattolo_gatto, $cibo_cane, $cibo_gatto];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETZe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header>
        <h1>Welcome to the Pet Shop</h1>
    </header>

    <div class="product-list">
        <?php foreach ($prodotti as $prodotto): ?>
            <div class="product-card">
                <img src="<?php echo $prodotto->getImmagine(); ?>" alt="<?php echo $prodotto->getNome(); ?>">
                <h3><?php echo $prodotto->getNome(); ?></h3>
                <p class="product-description"><?php echo $prodotto->getDescrizione(); ?></p>
                <p class="product-price"><?php echo $prodotto->getPrezzo(); ?> Euro</p>
                <p class="product-category"><?php echo $prodotto->getCategoria()->getNome(); ?></p>
                <p class="product-type"><?php echo ($prodotto->isFood()) ? 'Cibo' : (($prodotto->isToy()) ? 'Giocattolo' : 'Cuccia'); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>



</body>
</html>