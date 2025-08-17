  <?php wp_footer(); ?>
  <div class="max-w-screen-lg mx-auto ">
      <hr class="text-slate-300 border-0.5">
      <div class="flex justify-between mt-10 mb-7">
        <div class="w-13  ">
        <?php 
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>
        </div>
        <p class="text-gray-700 font-sm mt-2">© کلیه حقوق این سایت برای پارت محفوظ میباشد. </p>
        <div class="flex *:border *:border-gray-300 *:border-2 *:rounded-full *:grid *:w-9.5 *:h-9.5">
          <span><a href="" class="grid"><img src="<?php echo get_template_directory_uri();?>/img/twitter.png" alt="twitter" class="w-4 place-self-center"></a></span>
          <span class="mx-3"><a href="" class="grid"><img src="<?php echo get_template_directory_uri();?>/img/linkedin.png" alt="linkedin" class="w-3 place-self-center"></a></span>
          <span><a href="" class="grid"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" alt="facebook" class="w-4 place-self-center"></a></span>
        </div>
      </div>
  </div>
</body>
</html>