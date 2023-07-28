<?php 

function get_item_html($id,$item){

    $output = '<div class="m-10 p-5 w-64 border- bg-re-100 flex flex-col justify-around items-center rounded-lg text-center">'
        .'<a href="#">'
        .'<img  src ="'
        .$item["img"].'" alt="' 
        .$item["title"]. '"/>'
        .'<p class="p-4 font-semi-bold text-gray-600">View details</p>'
        .'</a>'
        ."</div>";

    return $output;
    } 


    //random function

    
?>