

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<style>
    @font-face {
    font-family: 'Vazirmatn';
    src: url('<?php echo get_template_directory_uri();?>/fonts/webfonts/Vazirmatn-Regular.woff2') format('woff2');
    
}
    @font-face {
    font-family: 'Vazirmatn-bold';
    src: url('<?php echo get_template_directory_uri();?>/fonts/webfonts/Vazirmatn-SemiBold.woff2') format('woff2');
    }
    
*{
    font-family: 'Vazirmatn';
}
.vazir-bold{
    font-family: 'Vazirmatn-bold';
}
</style>
<body 


<?php body_class("bg-gray-100"); ?>>
   
    <header class="bg-white border-b-1 border-slate-300">
    <div class="max-w-screen-lg mx-auto flex py-2 justify-between">
     <div class="flex">
        <div class="w-13 ">
        <?php 
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>

          </div>
          
    <?php
        wp_nav_menu( [  
            'theme_location' => 'Header',
            'menu_class'     => 'flex my-auto text-md text-gray-500 ',
            'container'      => false
        ] );
        
        ?>
       
    </div>
        <div class="flex">
            <ul class="flex my-auto text-md text-gray-500">
            <li class=" text-red-300">
              <img src="<?php echo get_template_directory_uri();?>/img/trolleygray1.png" alt="shop" class="w-6 absolute">
              <span class="relative bg-red-500 w-4.5 h-4.5 rounded-full text-[10px] text-gray-100 grid bottom-2.5 left-2"><p class="place-self-center">1</p></span>
            </li>
        </ul>
        </div>
    </div>
    </header>


