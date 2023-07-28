<!-- insert header from include/header.php -->
<?php 
    $pageTitle = "Personal Media Library";
    include("include/header.php");
    include("include/data.php");
    include("include/functions.php");

?>

<section class="min-h-screen   flex flex-col justify-start items-center pt-10 ">
    <h1 class="text-3xl font-bold text-gray-300 underline underline-offset-8">
        Personal media Library 
    </h1>
    <Div class="w-[100%] container mx-auto flex flex-wrap justify-center items-center ">
        <?php
            foreach($catalog as $id => $item){
              
                echo get_item_html($id,$item);

            ;}

            ?>

    </Div>
</section>

<?php include("include/footer.php")?>
















