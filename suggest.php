<?php 
 $pageTitle = "Suggest a media item";
 $section = "suggest";

include("include/header.php");
include("include/functions.php");
include("include/data.php");


?>

<section class="min-h-screen   flex flex-col justify-start items-center pt-6 ">
    <Div class="w-[100%] container mx-auto flex flex-wrap justify-center items-center ">
        
        <?php 
        
            $random = array_rand($catalog,4);

            foreach($random as $id ){
              
                echo get_item_html($id,$catalog[$id]);

            ;}
        
        ?>
    </Div>

</section>

<?php include("include/footer.php")?>