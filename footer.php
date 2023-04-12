

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
                            'terms' => 'company'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args);
                    ?>  
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <?php if(get_field('company')) :while(the_repeater_field('company')):?>
                    <ul>
                    <li> <h2><?php echo get_field('company_info');?></h2></li>
                    <li> <h2><?php echo get_field('company_info');?></h2></li>
                    <li> <h2><?php echo get_field('company_info');?></h2></li>
                    <li> <h2><?php echo get_field('company_info');?></h2></li>
                    <li> <h2><?php echo get_field('company_info');?></h2></li>
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
                    <ul>
                        <li>Features</li>
                        <li>Business Marketing</li>
                        <li>User Analytic</li>
                        <li>Live Chat</li>
                        <li>Unlimited Support</li>
                    </ul>
                    <ul>
                        <li>Resources</li>
                        <li>IOS & Android</li>
                        <li>Watch a Demo</li>
                        <li>Customers</li>
                        <li>API</li>
                    </ul>
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