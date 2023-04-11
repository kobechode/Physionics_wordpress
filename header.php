<?php  wp_head() ?>
<header class="header py--2">
                <div class="container">
                    <div class="header__wrapper d--flex align--center justify--between">
                        <h2 class="text--light">Physionic</h2>

                        <nav class="nav">
                            <ul>
                            <?php wp_menu_li();?>
                            </ul>
                        </nav>

                        <div class="toggle__menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
        
                    </div>
                </div>
            </header>