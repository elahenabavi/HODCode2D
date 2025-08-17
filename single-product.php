
 <?php
      get_header();
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>
<?php
$feature=get_post_meta(get_the_ID(),'des1',true); 
$feature2=get_post_meta(get_the_ID(),'des2',true);
$property2= get_post_meta(get_the_ID(),'pro1',true);
$property= get_post_meta(get_the_ID(),'pro2',true);
?>
    
<div class="flex max-w-screen-lg mx-auto justify-between mt-13">
<div class="bg-zinc-50 w-58 h-60 rounded-xl border border-gray-300 border-1.5">
<p class="pr-3 py-3 font-semibold text-gray-600">محصولات مشابه</p> 
<div class="flex px-3">
   <img src="<?php echo get_template_directory_uri();?>/img/camera2.png" alt="camera" class=" w-13">
   <p class="text-xs text-gray-500 pr-1 self-center">دوربین دیجیتال آکسون مدل AX6062</p>
</div>
<hr class="mx-3 my-2 text-gray-300">
<div class="flex px-3">
   <img src="<?php echo get_template_directory_uri();?>/img/camera1.png" alt="camera" class=" w-13">
   <p class="text-xs text-gray-500 pr-1 self-center">دوربین دیجیتال آکسون مدل AX6062</p>
</div>
<hr class="mx-3 my-2 text-gray-300">
<div class="flex px-3">
   <img src="<?php echo get_template_directory_uri();?>/img/camera2.png" alt="camera" class=" w-13">
   <p class="text-xs text-gray-500 pr-1 self-center">دوربین دیجیتال آکسون مدل AX6062</p>
</div>   
</div>
<div>
    <div class="grid bg-gray-300 w-193 h-120 rounded-lg  ">
      <div class="place-self-center w-140"><?php the_post_thumbnail('medium large')?></div>
    </div>
    <div class="flex justify-between mt-1">
        <p class="font-semibold text-xl self-end text-gray-700"><?php the_title()?></p>
       <div class=" flex mt-5"dir="ltr">
          <?php $price = get_post_meta(get_the_ID(),'price',true)?>
        <?php $oldPrice = get_post_meta(get_the_ID(),'old_price',true)?>
            <sup class="text-xs text-sky-700 self-end">تومان</sup>
            <p class="mx-3 font-semibold text-lg "><?php echo number_format($price)?></p>
            <p class="text-gray-400 line-through self-center ml-1"><?php echo number_format($oldPrice)?></p>
            <span class="text-white bg-red-500 rounded-lg px-2 ml-9 pt-1">4%</span>
        </div>
    </div>
    <p class="text-sm/7 text-gray-500 w-191 pt-7"><?php  echo get_the_excerpt();?></p>
    <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-3 px-7 my-7 flex"><img src="<?php echo get_template_directory_uri();?>/img/trolley2.png" class="w-5"><span class="self-center text-sm pr-3">افزودن به سبد</span></button>
    <p class="font-semibold text-xl text-gray-700">ویژگی ها</p>
    <ul class="list-disc text-gray-500 text-xs *:mr-6 *:mt-4">
        <?php
        echo "<li><span class='text-gray-500 text-sm'>$property2</span><span class='text-sm text-gray-700 font-semibold mr-3'>$feature2</span></li>";
          echo "<li><span class='text-gray-500 text-sm'>$property</span><span class='text-sm text-gray-700 font-semibold mr-3'>$feature</span></li>";
        ?>
    </ul>
</div>
</div>
<div class="mb-80"></div>
<?php
get_footer();
?> 