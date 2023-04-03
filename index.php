<?php
require_once 'category.php';
require_once 'product.php';
require_once 'toy.php';
require_once 'food.php';

// Definizione delle categorie
$categoria_cani = new Category(1, 'Cani', '');
$categoria_gatti = new Category(2, 'Gatti', '');

// Definizione dei prodotti
$giocattolo_cane = new Toy(1, 'Giocattolo per cane', 'a nice gift for your eDog', 10.99, 'dog_toy.jpg', $categoria_cani);
$giocattolo_gatto = new Toy(2, 'Giocattolo per gatto', 'a nice gift for your eCat', 9.99, 'cat_toy.jpg', $categoria_gatti);
$cibo_cane = new Food(3, 'Cibo per cane', 'cibo per cani', 19.99, 'dog_food.jpg', $categoria_cani);
$cibo_gatto = new Food(4, 'Cibo per gatto', 'cibo per gatti', 15.99, 'cat_food.jpg', $categoria_gatti);


$prodotti = [$giocattolo_cane, $giocattolo_gatto, $cibo_gatto, $cibo_cane];
var_dump($prodotti)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETZe</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/30410f2966.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <header>
        <h1>Welcome to the Pet Shop</h1>
    </header>

    <main>
        <div class="products">
            <?php echo count($prodotti); var_dump($giocattolo_cane); var_dump($giocattolo_gatto); var_dump($cibo_cane); var_dump($cibo_gatto); ?> 
            <?php for ($i=0; $i<count($prodotti); $i++){ ?>
                <?php $prodotto = $prodotti[$i]; ?>

                <pre><?php echo $i; echo $prodotto->getId(); ?></pre>

                <br>
                <br>
                <br>

<!--                  <div class="product-card">
                    <img src="<?php echo $prodotto->getImmagine(); ?>" alt="<?php echo $prodotto->getNome(); ?>">
                    <h2><?php echo $prodotto->getNome(); ?></h2>
                    <p><?php echo $prodotto->getDescrizione(); ?></p>
                    <p><?php echo $prodotto->getPrezzo(); ?> €</p>
                    <span><?php echo $prodotto->getCategoria()->getIcona() . ' ' . $prodotto->getCategoria()->getNome(); ?></span>
                    <span><?php echo $prodotto->isToy() ? 'Giocattolo' : ($prodotto->isFood() ? 'Cibo' : 'Cuccia'); ?></span>
                </div> -->
            <?php } ?>
        </div>
    </main>


</body>
</html>



</body>
</html>