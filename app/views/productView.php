<?php

class productView{
    public function viewCategoryes($categoryes){
        require ('templates/header.phtml');
        ?>

        <ul>
           <?php
           foreach($categoryes as $category){?>
                <li >
                    <a href=""><?php echo $category->Category_name?></a>
                </li>
     <?php   }?> 
        </ul>
    
        <?php
        require ('templates/footer.phtml');
    }
}
