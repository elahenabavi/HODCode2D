<?php 
session_start();
$_SESSION['header']="no";
/* Template Name: Login */
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
    <p class="text-center text-gray-700 text-xl font-semibold mt-10">ارتباط با ما</p>
    <p class="text-center text-gray-500 text-sm py-3 pb-4">در صورت داشتن سوال یا بروز مشکل در سایت از طریق فرم زیر با ما در ارتباط باشید.</p>
    <div class="max-w-screen-lg mx-auto flex justify-center mt-4 ">
      <div class="bg-zinc-50 w-130 border border-slate-300 border-1.5 rounded-xl grid">
      <p class="text-sm text-gray-600 font-semibold pt-5 pr-5 pb-3">نام</p>
      <input type="username" class=" focus:border-sky-400 
      focus:outline focus:outline-sky-500 disabled:border-gray-300 
      disabled:text-gray-400 disabled:shadow-none text-xs focus:text-sm 
      border border-gray-300 border-1.5 w-120 mx-4 focus:py-2
      place-self-center py-2.5 pr-2 rounded-lg" placeholder="نام خود را وارد نمایید.">
      <p class="text-sm text-gray-600 font-semibold pt-5 pr-5 pb-3">ایمیل</p>
      <input type="email" class="invalid:border-red-500 invalid:text-red-600
       focus:invalid:border-red-500 focus:border-sky-400 
      focus:outline focus:outline-sky-500 disabled:border-gray-300 
      disabled:text-gray-400 disabled:shadow-none text-xs focus:text-sm 
      border border-gray-300 border-1.5 w-120 mx-4 
      place-self-center pr-2 py-2.5 focus:py-2 rounded-lg" placeholder="ایمیل خود را وارد نمایید.">
      <p class="text-sm text-gray-600 font-semibold pt-5 pr-5 pb-3">متن پیام</p>
      <textarea name="message" id="message" class="focus:border-sky-400 
      focus:outline focus:outline-sky-500 disabled:border-gray-300 
      disabled:text-gray-400 disabled:shadow-none text-xs focus:text-sm 
      border border-gray-300 border-1.5 w-120 mx-4 focus:py-2
      place-self-center py-2.5 pr-2 rounded-lg h-25 resize-none" placeholder="متن مورد نظر را وارد نمایید."></textarea>
      <button class=" my-6 mx-4 py-2.5 bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg text-sm w-120">ارسال پیام</button>
      </div>
    </div>
    <div class="h-190"></div>  
<?php
get_footer();
?>     