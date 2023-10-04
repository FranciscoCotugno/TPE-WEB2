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

        <ul class="list-categorys">
            <li>
                <a href="">Todos</a>
            </li>
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

        <div class="container-cards">
            <?php foreach ($products as $product) { ?>
                <div class="card">
                    <div class="card-img">
                        <img src="./img/productos/<?php echo $product->Product_name ?>.png" alt="<?php echo $product->Product_name ?> <?php echo $product->Milliliters ?>ml">
                    </div>
                    <div class="card-info">
                        <div class="card-description">
                            <p class="card-productName"><?php echo $product->Product_name ?></p>
                            <p class="card-milliliters"><?php echo $product->Milliliters ?>ml</p>
                        </div>
                        <hr class="card-divider">
                        <div class="card-footer">
                            <p class="card-price">$<?php echo $product->Price ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

<?php
    }
}
