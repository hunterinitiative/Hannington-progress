<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $pageTitle ?></title>

</head>
<body>
    <?php
        $pageTitle = "Med!a Point";
        $section = null;
        $sectionHero = "landing-hero.jpg";

        if(isset( $_GET['path'] )){
            if($_GET['path'] == "books"){
                    $pageTitle = "books";
                    $section ="books";
                    $sectionHero ="books-landing.jpg";
                    
                }elseif($_GET['path'] == "music"){
                    $pageTitle = "music";
                    $section = "music";
                    $sectionHero ="music-landing.jpg";

                }elseif($_GET['path'] == "movies"){
                    $pageTitle = "movies";
                    $section = "movies";
                    $sectionHero ="movies-landing.jpg";

                }elseif($_GET['path'] == "podcast"){
                    $pageTitle = "podcast";
                    $section = "podcast";
                    $sectionHero ="podcast-landing.jpg";
                
                }elseif($_GET['path'] == "blog"){
                    $pageTitle = "blog";
                    $section = "blog";
                    $sectionHero ="books-landing.jpg";
                
                }elseif($_GET['path'] == "suggest"){
                    $pageTitle = "suggest";
                    $section = "suggest";
                    $sectionHero ="urban.jpg";
                }
        }
    ?>
    <header class=" w-screen h-[70vh] bg-set bg-cover bg-no-repeat flex flex-col justify-between" style="background:linear-gradient(to bottom, rgba(0,0,0,0.8),100%,rgba(0,0,0,0.8)),url('../img/<?php echo $sectionHero; ?>')">
        <div class="container mx-auto flex justify-between items-center px-4 lg:py-4 xl:py-8">
            <div>
                <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 text-amber-400" viewBox="0 0 48 48"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M19.763 18.516c-2.825 1.549-5.285 2.87-7.928 2.87a4.333 4.333 0 0 1-4.328-4.01a5.27 5.27 0 0 1 1.868-4.032c.911-.615 1.14-1.206.674-1.862c-.532-.748-1.7-.279-2.2-.028A6.162 6.162 0 0 0 4.5 17.33c0 4.192 2.998 7.512 6.949 7.512c2.642 0 4.192-.42 7.463-1.97c1.272-.603 1.86-.236 2.081.226c.354.736-.712 1.12-1.116 1.316c-.798.388-3.121.479-3.258 1.413a30.581 30.581 0 0 0 .057 3.781s-3.19.581-2.973 1.994s1.447 1.526 2.54 1.515s3.975-1.253 3.964-2.575s.672-1.708 1.15-1.708s2.517.82 2.643 1.583a1.281 1.281 0 0 1-.616 1.56c-.649.456-1.947 1.23-1.879 1.96a1.842 1.842 0 0 0 1.412 1.537s.81 2.21 1.857 2.21s1.333-1.128 1.253-1.788a2.735 2.735 0 0 0-.228-.923a3.715 3.715 0 0 0 2.233-3.326a7.86 7.86 0 0 0-.422-3.656a9.115 9.115 0 0 0 1.037-4.1c-.08-2.062-.353-2.517.535-3.577s4.01-4.681 7.802-4.681s3.805 2.87 3.805 3.645a11.16 11.16 0 0 1-1.128 3.485a1.08 1.08 0 0 0 .227 1.526c.422.296.912.194 1.402-.273a7.504 7.504 0 0 0 2.21-5.046c0-2.63-2.312-6.868-6.675-6.868s-9.363 4.123-9.363 4.123a5.958 5.958 0 0 0 .4-2.312c-.336-1.942-2.427-3.6-5.309-3.6s-4.487 3.28-4.487 5.092a4.478 4.478 0 0 0 1.697 3.11Z"/></svg>
                <span class="text-amber-400 ">med!a point</span>
            </a>
            
            </div>
            <ul class="flex pl-10 lg:space-x-6 xl:space-x-16 text-white font-semibold uppercase ">
                <li class="text-center <?php if($section == "books"){echo "on";}?>"><a href="catalog.php?path=books" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect width="3.5" height="13" x=".55" y=".5" rx=".5"/><rect width="3.5" height="11" x="4.05" y="2.5" rx=".5"/><rect width="3" height="11" x="9.26" y="2.3" rx=".5" transform="rotate(-14.05 10.779 7.795)"/><path d="M.55 10h3.5m0-1h3.5m2.5 2l2.88-.72"/></g></svg>
                    </a>
                    <span class="text-xs">books </span>
                </li>
                <li class="text-center  <?php if($section == "movies"){echo "on";}?>"><a href="catalog.php?path=movies" class="hover:text-blue-300 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 16 16"><path fill="currentColor" d="M13.218 4.246L7.087 6.238a.502.502 0 0 1-.24.079L4.741 7H13.5a.5.5 0 0 1 .5.5v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 12.5v-5c0-.106.033-.205.09-.287l-.195-.602A2.5 2.5 0 0 1 3.5 3.461l6.657-2.163a2.5 2.5 0 0 1 3.15 1.605l.232.713a.5.5 0 0 1-.321.63Zm-3.744.165l1.285-2.226a1.508 1.508 0 0 0-.293.064l-1.245.404l-1.308 2.265l1.56-.507Zm2.295-1.979a.515.515 0 0 1-.02.037l-.854 1.48l1.538-.5l-.077-.237a1.494 1.494 0 0 0-.587-.78Zm-3.97.683l-1.56.507L4.93 5.887l1.56-.507L7.8 3.115ZM2.923 6.54l.587-.19l1.307-2.266l-1.008.328a1.5 1.5 0 0 0-.963 1.89l.077.238Z"/></svg>
                    </a>
                    <span class="text-xs">movies</span>
                </li>
                <li class="text-center  <?php if($section == "music"){echo "on";}?>"><a href="catalog.php?path=music" class="hover:text-blue-300 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 48 48"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 42h5m-5-6h5m-5-6h5m-5-6h5m6 18h5m-5-6h5m-5-6h5m-5-6h5m-5-6h5m-5-6h5m-5-6h5m6 36h5m6 0h5m-16-6h5m6 0h5m-16-6h5m6 0h5m-5-6h5m-5-6h5"/></svg>
                    </a>
                    <span class="text-xs">music</span>
                </li>
                <li class="text-center  <?php if($section == "podcast"){echo "on";}?>"><a href="catalog.php?path=podcast" class="hover:text-blue-300 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 448 512"><path fill="currentColor" d="M267.429 488.563C262.286 507.573 242.858 512 224 512c-18.857 0-38.286-4.427-43.428-23.437C172.927 460.134 160 388.898 160 355.75c0-35.156 31.142-43.75 64-43.75s64 8.594 64 43.75c0 32.949-12.871 104.179-20.571 132.813zM156.867 288.554c-18.693-18.308-29.958-44.173-28.784-72.599c2.054-49.724 42.395-89.956 92.124-91.881C274.862 121.958 320 165.807 320 220c0 26.827-11.064 51.116-28.866 68.552c-2.675 2.62-2.401 6.986.628 9.187c9.312 6.765 16.46 15.343 21.234 25.363c1.741 3.654 6.497 4.66 9.449 1.891c28.826-27.043 46.553-65.783 45.511-108.565c-1.855-76.206-63.595-138.208-139.793-140.369C146.869 73.753 80 139.215 80 220c0 41.361 17.532 78.7 45.55 104.989c2.953 2.771 7.711 1.77 9.453-1.887c4.774-10.021 11.923-18.598 21.235-25.363c3.029-2.2 3.304-6.566.629-9.185zM224 0C100.204 0 0 100.185 0 224c0 89.992 52.602 165.647 125.739 201.408c4.333 2.118 9.267-1.544 8.535-6.31c-2.382-15.512-4.342-30.946-5.406-44.339c-.146-1.836-1.149-3.486-2.678-4.512c-47.4-31.806-78.564-86.016-78.187-147.347c.592-96.237 79.29-174.648 175.529-174.899C320.793 47.747 400 126.797 400 224c0 61.932-32.158 116.49-80.65 147.867c-.999 14.037-3.069 30.588-5.624 47.23c-.732 4.767 4.203 8.429 8.535 6.31C395.227 389.727 448 314.187 448 224C448 100.205 347.815 0 224 0zm0 160c-35.346 0-64 28.654-64 64s28.654 64 64 64s64-28.654 64-64s-28.654-64-64-64z"/></svg>
                    </a>
                    <span class="text-xs">podcast</span>
                </li>
                <li class="text-center  <?php if($section == "blog"){echo "on";}?>"><a href="blog.php?path=blog" class="hover:text-blue-300 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 512 512"><path fill="currentColor" d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zm-96 16c0-26.5-21.5-48-48-48S0 117.5 0 144v224c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144h-16v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"/></svg>
                    </a>
                    <span class="text-xs">Blog</span>
                </li>
                <li class="text-center  <?php if($section == "suggest"){echo "on";}?>"><a href="suggest.php?path=suggest" class="hover:text-blue-300 hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 24 24"><path fill="currentColor" d="M17.41 6.59L15 5.5l2.41-1.09L18.5 2l1.09 2.41L22 5.5l-2.41 1.09L18.5 9l-1.09-2.41zm3.87 6.13L20.5 11l-.78 1.72l-1.72.78l1.72.78l.78 1.72l.78-1.72L23 13.5l-1.72-.78zm-5.04 1.65l1.94 1.47l-2.5 4.33l-2.24-.94c-.2.13-.42.26-.64.37l-.3 2.4h-5l-.3-2.41c-.22-.11-.43-.23-.64-.37l-2.24.94l-2.5-4.33l1.94-1.47c-.01-.11-.01-.24-.01-.36s0-.25.01-.37l-1.94-1.47l2.5-4.33l2.24.94c.2-.13.42-.26.64-.37L7.5 6h5l.3 2.41c.22.11.43.23.64.37l2.24-.94l2.5 4.33l-1.94 1.47c.01.12.01.24.01.37s0 .24-.01.36zM13 14c0-1.66-1.34-3-3-3s-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3z"/></svg>
                    </a>
                    <span class="text-xs">Suggest</span>
                </li>
            </ul>
        </div>
        <section class=" container mx-auto px-4 pb-24">
            <h1 class="text-white text-7xl font-extrabold"><?php echo $pageTitle; ?>
                
            </h1>
            <p class="text-white ">Lorem ipsum dolor consectetur!</p>
        </section>
    </header>
    <main class="bg-neutral-900">
        
    
