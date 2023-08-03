<?php 

    include("include/data.php");
    include("include/header.php");
    include("include/functions.php");


  
?>

<section class="min-h-screen container mx-auto flex flex-col justify-start items-center md:pt-8 xxl:pt-20">
   
    <Div class="container mx-auto flex flex-wrap justify-center items-center ">
     
        <?php
            #fetching items from catalog=>sorting and displaying
            $output = array();
            foreach ($catalog as $id => $item) {

                if(strtolower($section) == strtolower($item["category"])){
                    $output[]=$id;
                }
            }

            foreach($output as $id){

                echo get_item_html($id,$catalog[$id]);
            ;}
        ?>
                           
    </Div>
</section>

<?php include("include/footer.php")?>