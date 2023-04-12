

<?php wp_footer()?>
<footer class="getInTouch py--10">
            <div class="container">
                <div class="getInTouch__wrapper">
                    <ul>
                        <li>   <h2><?php echo get_field('get_touch');?></h2></li>
                        <li>
                       <p><?php echo get_field('get_touch_footer');?></p> 
                        </li>
                        <li>
                            <ul class="socLinks d--flex">
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                            </ul>
                        </li>
                    </ul>


                    
                <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 4,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'Company_footer'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>  
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    

                          <div>
                          <?php if(get_field('company')) :while(the_repeater_field('company')):?>
                          <ul>
                    <li>  <?php echo get_sub_field('company_info');?> </li>
                    <li>  <?php echo get_sub_field('about_us');?></h2></li>
                    <li>  <?php echo get_sub_field('we_are_hiring');?></h2></li>
                    <li>  <?php echo get_sub_field('blog');?></h2></li>
                 

                    </ul>
                    <?php 

endwhile;
    else : 
        echo "no available post yet";
endif;
    wp_reset_postdata();

     ?>
                          
                          </div>
                
                    <?php 

                endwhile;
                    else : 
                        echo "no available post yet";
                endif;
                    wp_reset_postdata();

                     ?>

                   <?php
                   
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 5,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'Footer_Features'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?> 
              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                     <div class="features_footer">
                     <?php if(get_field('features')) :while(the_repeater_field('features')):?>
                    
                     <ul>
                         <li>  <?php echo get_sub_field('features_1');?></li>
                         <li>  <?php echo get_sub_field('business_marketing');?></li>
                         <li>  <?php echo get_sub_field('user_analytic');?></li>
                         <li>  <?php echo get_sub_field('live_chat');?></li>
                         <li>  <?php echo get_sub_field('unlimited_support');?></li>
                    </ul>
                    <?php 

endwhile;
    else : 
        echo "no available post yet";
endif;
    wp_reset_postdata();

    ?>
                     </div>
                     <?php 

                  endwhile;
                      else : 
                          echo "no available post yet";
                  endif;
                      wp_reset_postdata();

                      ?>

<?php
                   
                   $args = array(
                       'post_type' => 'Physionics',
                       'posts_per_page' => 5,
                       'tax_query' => array(
                         array(
                           'taxonomy' => 'category',
                           'field' => 'slug',
                           'terms' => 'Resources_Footer'
                         )
                       )
                   );
                   $newQuery = new WP_Query($args);
                   ?> 
  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
               <div class="resources">
               <?php if(get_field('footer_resources')) :while(the_repeater_field('footer_resources')):?>
               <ul>
               <li>  <?php echo get_sub_field('resources');?></li>
                         <li>  <?php echo get_sub_field('system');?></li>
                         <li>  <?php echo get_sub_field('demo');?></li>
                         <li>  <?php echo get_sub_field('customers');?></li>
                         <li>  <?php echo get_sub_field('api');?></li>
                    </ul>
                    <?php 

endwhile;
    else : 
        echo "no available post yet";
endif;
    wp_reset_postdata();

    ?>

               </div>
               <?php 

              endwhile;
                  else : 
                      echo "no available post yet";
              endif;
                  wp_reset_postdata();

                  ?>
                  
                </div>
            </div>
        </footer>
        <div class="allRightReserved py--3 bg--gray">
            <div class="container">
                <p class="text--center">Made With Love By Figmaland All Right Reserved</p>
            </div>
        </div>

        <script>
            
            const toogleMenu = document.querySelector('.toggle__menu');
            const nav = document.querySelector('.nav');
            const header = document.querySelector('.header');

            toogleMenu.addEventListener('click' , () =>{
                toogleMenu.classList.toggle('open');
                nav.classList.toggle("open");
                header.classList.toggle("open");
            });

        </script>

    </body>
</html>