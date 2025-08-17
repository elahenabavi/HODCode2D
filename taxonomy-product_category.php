<?php get_header();?>
<?php $category=single_term_title('',false); ?>
 <div id="page" class="site">
    <div class="max-w-screen-lg mx-auto gap-4 flex py-3 ">
       <div class=" mt-10">
      <?php
      $terms = get_terms([
        'taxonomy' => 'product_category',
        'hide_empty' => false
      ]);  
      foreach ($terms as $term) {
         if( ($term->name) == "$category"){  
      ?>
     <a href="<?= get_term_link($term) ?>" class="rounded-full px-4 py-1 ml-3 text-sm text-white border border-blue-500 bg-blue-500 "><?= $term->name ?></a>
     <?php 
    } 
     else {?>
        <a href="<?= get_term_link($term) ?>" class="rounded-full px-4 py-1 ml-3 text-sm  border border-gray-400 bg-white text-gray-500 "><?= $term->name ?></a>
      <?php
     }
     
      }
      ?>
  </div>
    </div>
</div>
<main id="main" class="site-main ">
      
        <div class="grid lg:grid-cols-3 gap-6 max-w-screen-lg mx-auto sm:grid-cols-2 mt-6  ">
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
        <div class=" w-82 h-109">
        <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
            <div class="w-60 place-self-center"><?php the_post_thumbnail()?></div>
        </div>
        <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3"><?php the_title()?></p>
    
         <?php $terms = get_the_terms( get_the_ID(), 'product_category' );
            if ($terms && !is_wp_error($terms)){
              foreach($terms as $term){
                if($term->slug!='all-products'){
                    echo "<p class='font-thin text-sm pt-3 pr-3 text-sky-700'>".$term->name."</p>";
                }
              }
            }
              
        ?>
        <div class="flex mt-5"dir="ltr">
        <?php $price = get_post_meta(get_the_ID(),'price',true)?>
        <?php $oldPrice = get_post_meta(get_the_ID(),'old_price',true)?>
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 font-bold text-gray-800"><?php echo number_format($price)?></p>
        <p class="text-gray-400 line-through"><?php echo number_format($oldPrice)?></p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
        <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
        <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5" onclick="location.href='<?php the_permalink()?>'">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
        <?php
          }
        } else {
          echo '<p >محصولی در این دسته وجود ندارد.</p>';
        }
        ?>
        </div>
    </main>
          </div>
<?php get_footer();?>