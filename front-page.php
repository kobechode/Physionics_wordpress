<?php

/*

Template Name: Home
*/
?>




<div class="bannerBg">

<?php get_header();?>

<section class="banner text--center">
                <div class="container">
                    <div class="banner__wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'banner'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>
        
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <div class="banner__intro text--light">
                        <h1><?php the_title(); ?></h1>
                            <p class="mb--5 text--light"><?php echo the_excerpt();?></p>
                            <ul>
                                <li><a class="btn bg--primary br--25" href="#">Get Qoute Now</a></li>
                                <li><a class="btn bg--primary br--25 bg--transparent" href="#">Learn More</a></li>
                            </ul>
                        </div>

                        <?php
                    endwhile;
                    else:
                        echo 'no available content';
                    endif;
                        wp_reset_postdata();
                ?>
                        <div class="banner__appointment bg--light">
                            <h3 class="text--secondary text--center mb--3">Book Appointment</h3>
                            <form action="">
                                <label for="Name">Name</label> <br>
                                <input type="text" name="" id="" placeholder="Full Name"> <br>
        
                                <label for="Email">Email Address</label> <br>
                                <input type="email" name="" id="" placeholder="example@gmail.com"> <br>
        
                                <label for="Email">Department</label> <br>
                                <select>
                                    <option value="">Please Select</option>
                                    <option value="">Department 1</option>
                                    <option value="">Department 2</option>
                                    <option value="">Department 3</option>
                                    <option value="">Department 4</option>
                                    <option value="">Department 5</option>
                                </select> <br>
        
                                <label for="Email">Time</label> <br>
                                <input type="text" name="" id="" placeholder=""> <br>
        
                                <input type="submit" class="btn bg--primary bd--none" value="Book Appointment">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>

</div>

<section class="leadingMed text--center py--10">




            <div class="container">

            <h1 class="mb--2"><?php echo get_field('leading_medicine');?> </h1>    
                <p class="mb--2">
                <?php echo get_field('leadingmedicine_p');?> 
                </p>  
              
            <div class="leadingMed__wrapper">   

          
            <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'leadingmed'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>        




         <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

           

                      
                <?php if(get_field('emergency_cases')) :while(the_repeater_field('emergency_cases')):?>

                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">
                        <?php 
            $image = get_sub_field('emergency_image');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
          
                        <?php echo get_sub_field('emergency_title');?>
                        </div>
                        <div class="leadingMed__scope">
                            <ul>
                            <?php if(get_sub_field('emergency_desc')) :while(the_repeater_field('emergency_desc')):?>
                              <li> <?php echo get_sub_field('emergencyd1');?> </li>
                                <?php 

                               endwhile;
                                  else : 
                                echo "no available post yet";
                               endif;
                             wp_reset_postdata();

                                 ?>
                                
                            </ul>
                        </div>

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
            </div>
        </section>


        <section class="testimonials text--center py--10 bg--gray">
            <div class="container">
           <h2><?php echo get_field('testimonial1');?></h2> 
                <p class="mb--3">
                <p><?php echo get_field('testimonials2');?> </p> 
                </p>
                <div class="testimonials__wrapper">



                <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'testimonials'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>   


<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
             
<?php if(get_field('testimonials_handler')) :while(the_repeater_field('testimonials_handler')):?>

                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <p class="mb--3">
                        <p><?php echo get_sub_field('testimonials_desc');?> </p> 
                        </p>
                        <?php 
            $image = get_sub_field('testimonial_img');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
                        
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

          
        </section>




        <section class="faq text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary"><?php echo get_sub_field('faqs1');?></h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the 
                    two major realms of Classical 
                    physics: Newtonian mechanics
                </p>
                <div class="faq__wrapper">
                <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 10,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'faqs'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>        

       <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
       <?php if(get_field('frequently_asked')) :while(the_repeater_field('frequently_asked')):?>
                    <div class="faq__items text--left bg--light">

                        <ul class="d--flex">
                        <li> <?php 
            $image = get_sub_field('frequently_img');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
        
             </li>
                            <li>
                                <h4 class="text--secondary"><?php echo get_sub_field('frequently_asked1');?></h4>
                                <p><?php echo get_sub_field('frequently_asked2');?></p>
                            </li>
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

        </section>

        <section class="pricing text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary"><?php echo get_field('pricing1');?></h2>
                <p class="t--bold mb--5">
                <?php echo get_field('pricing2');?>
                </p>
            
                <div class="pricing__wrapper">
                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3"><?php echo get_field('desc1');?></h3>
                        <p class="t--bold mb--2"><?php echo get_field('desc2');?></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('desc3');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small><?php echo get_field('desc4');?></small></p>
                                <p><small><?php echo get_field('desc5');?></small></p>
                            </li>
                        </ul>

                        <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 5,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'cards'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>  
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    <?php if(get_field('card_contents')) :while(the_repeater_field('card_contents')):?>
                        <ul class="includes mb--3">
                            <li>
                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content1');?></p>
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content2');?></p>
                                
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content3');?></p>
                                
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content4');?></p>
                                
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content5');?></p>
                                
                            </li>
                            <?php 

                                endwhile;
                                    else : 
                                        echo "no available post yet";
                                endif;
                                    wp_reset_postdata();

                                ?>
   
                        </ul>
                        <?php 

                        endwhile;
                            else : 
                                echo "no available post yet";
                        endif;
                            wp_reset_postdata();

                        ?>
                                     
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--secondary">
                        <h3 class="text--secondary mb--3"><?php echo get_field('desc21');?></h3>
                        <p class="t--bold mb--2"><?php echo get_field('desc22');?></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('desc23');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small><?php echo get_field('desc24');?></small></p>
                                <p><small><?php echo get_field('desc25');?></small></p>
                            </li>
                        </ul>






                        <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 5,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'cards'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>  
    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
    <?php if(get_field('card_contents')) :while(the_repeater_field('card_contents')):?>
                        <ul class="includes mb--3">
                            <li>
                                <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content1');?></p>
                            </li>
                            <li>
                                    <?php 
                    $image = get_sub_field('img1');
        
                    if(!empty($image)):
                ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
                            <p><?php echo get_sub_field('content2');?></p>
                            </li>
                            <li>
                            <?php 
            $image = get_sub_field('img1');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
                            <p><?php echo get_sub_field('content3');?></p>
                            </li>
                            <li>
                            <?php 
            $image = get_sub_field('img1');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
                            <p><?php echo get_sub_field('content4');?></p>
                            </li>
                            <li>
                            <?php 
            $image = get_sub_field('img1');
  
            if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
                            <p><?php echo get_sub_field('content5');?></p>
                            </li>
                            <?php 

                                endwhile;
                                    else : 
                                        echo "no available post yet";
                                endif;
                                    wp_reset_postdata();

                                ?>

                        </ul>
                        <?php 

                        endwhile;
                            else : 
                                echo "no available post yet";
                        endif;
                            wp_reset_postdata();

                        ?>

                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3"><?php echo get_field('desc31');?></h3>
                        <p class="t--bold mb--2"><?php echo get_field('desc32');?></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('desc33');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small><?php echo get_field('desc34');?></small></p>
                                <p><small><?php echo get_field('desc35');?></small></p>
                            </li>
                        </ul>


                        <?php
                    $args = array(
                        'post_type' => 'Physionics',
                        'posts_per_page' => 5,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'cards'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>  

        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
        <?php if(get_field('card_contents')) :while(the_repeater_field('card_contents')):?>
                        <ul class="includes mb--3">
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content1');?></p>
                               
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content2');?></p>
                              
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content3');?></p>
                                 
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content4');?></p>
                               
                            </li>
                            <li>

                            <?php 
                $image = get_sub_field('img1');
    
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        
                                 <p><?php echo get_sub_field('content5');?></p>
                             
                            </li>

                            <?php 

                            endwhile;
                                else : 
                                    echo "no available post yet";
                            endif;
                                wp_reset_postdata();

                            ?>
                        </ul>

                        <?php 

                        endwhile;
                            else : 
                                echo "no available post yet";
                        endif;
                            wp_reset_postdata();

                        ?>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="subscribe text--center py--10 bg--secondary text--light">
            <div class="container">
                <div class="subscribe__wrapper">
                    <div class="subscribe__intro mb--2">
                        <h2><?php echo get_field('get_touch');?></h2>
                        <p class="text--light">
                            <small>
                            <?php echo get_field('get_touch_desc');?>
                            </small>
                        </p>
                    </div>
                    <div class="groupInput">
                        <input type="text" name="" id="" placeholder="Your Email">
                        <input type="button" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>



      




        <?php get_footer();?>
