<?php

class productView
{
    public function viewHeader()
    {
        require('templates/header.phtml');
    }

    public function viewFooter()
    {
        require('templates/footer.phtml');
    }

    public function viewCategoryes($categoryes)
    {
?>

        <ul>
            <?php foreach ($categoryes as $category) { ?>
                <li>
                    <a href=""><?php echo $category->Category_name ?></a>
                </li>
            <?php   } ?>
        </ul>

    <?php
    }

    function showProducts($products)
    {
    ?>

        <div class="contenedor-cards">
            <?php foreach ($products as $product) { ?>
                <div class="card">
                    <div class="card-img">
                        <img src="./img/fernet-branca-750ml-recorted.png" alt="<?php echo $product->Product_name ?> <?php echo $product->Milliliters ?>ml">
                    </div>
                    <div class="card-text">
                        <p class="card-title"><?php echo $product->Product_name ?></p>
                        <p class="card-subtitle"><?php echo $product->Milliliters ?>ml</p>
                    </div>
                    <hr class="card-divider">
                    <div class="card-footer">
                        <p class="card-price">$<?php echo $product->Price ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

<?php
    }
}
