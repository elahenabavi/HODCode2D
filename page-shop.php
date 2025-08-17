
<?php 
session_start();
$_SESSION['header']="no";
/* Template Name: shop */
?>
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
      <img src="<?php echo get_template_directory_uri();?>/img/camera2.png" alt="camera" class="place-self-center w-140">
    </div>
    <div class="flex justify-between mt-1">
        <p class="font-semibold text-xl self-end text-gray-700">دوربین دیجیتال کانن مدل EOS 250D</p>
       <div class=" flex mt-5"dir="ltr">
            <sup class="text-xs text-sky-700 self-end">تومان</sup>
            <p class="mx-3 font-semibold text-lg ">27,399,000</p>
            <p class="text-gray-400 line-through self-center ml-1">28,440,000</p>
            <span class="text-white bg-red-500 rounded-lg px-2 ml-9 pt-1">4%</span>
        </div>
    </div>
    <p class="text-sm/7 text-gray-500 w-191 pt-7">دوربین دیجیتال کانن مدل EOS 250D یک دوربین همه کاره است که هم در عکاسی و هم
       در فیلمبرداری خوب عمل میکند. این دوربین دارای حسگر APS-C CMOS با رزولوشن 24.2 مگاپیکسل است
        که از پردازشگر DIGIC 8 بهره میبرد که میتواند با کیفیت 4K فیلمبرداری کند.
         بازه ISO این دوربین بین 100 تا 25600 است که به شما امکان 
         عکاسی در شرایط نوری مختلف را میدهد. حسگر این دوربین دارای فوکوس خودکار 
         CMOS AF Dual Pixel است و از تشخیص فازی برای فوکوس دقیقتر و 
         سریعتر در هم در زمان عکاسی و هم در زمان فیلمبرداری در حالت Live View 
         بهره میبرد. اما زمانی که از منظره یاب استفاده میکنید و ۹ نقطه با سیستم تشخیص فازی برای فوکوس کردن 
         به شما کمک میکند که از دقت و سرعت بالایی برخوردار هستند. با وجود طراحی کوچک، پشت این 
         دوربین صفحه نمایش لمسی بزرگ ۳ اینچی دیده میشود که میتواند در تغییر دادن تنظیمات 
         یا تعیین نقطهی فوکوس کار شما را راحت کند. صفحه نمایش این دوربین قابلیت چرخش 
         دارد و میتوانید برای عکاسی از زوایای بالا یا پایین نیز از آن استفاده کنید. 
         دوربین کانن EOS 250D دارای سیستم Wi-Fi است که میتوانید برای انتقال عکس به 
         موبایل یا پشتیز از آن استفاده کنید. همچنین Bluetooth این دوربین به شما اجازه میدهد تا بتوانید با استفاده از برنامه ی مخصوص بر روی موبایل خود،
          دوربین را کنترل کنید.</p>
    <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-3 px-7 my-7 flex"><img src="<?php echo get_template_directory_uri();?>/img/trolley2.png" class="w-5"><span class="self-center text-sm pr-3">افزودن به سبد</span></button>
    <p class="font-semibold text-xl text-gray-700">ویژگی ها</p>
    <ul class="list-disc text-gray-500 text-xs *:mr-6 *:mt-4">
        <li><span class="text-gray-500 text-sm">نوع حسگر:</span><span class="text-sm text-gray-700 font-semibold mr-3">CMOS</span></li>
        <li><span class="text-gray-500 text-sm">قطع حسگر:</span><span class="text-sm text-gray-700 font-semibold mr-3">(کراپ فریم) APS-C / Crop Frame</span></li>
    </ul>
</div>
</div>
<div class="mb-80"></div>
<?php
get_footer();
?> 

