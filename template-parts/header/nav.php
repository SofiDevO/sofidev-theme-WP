<?php
/*
*Header Navigation template
*@package Sofidev
*/
?>

<div class="logo">
        <?php the_custom_logo(); ?>
        <a  class="link__logo" href="<?php echo get_home_url(); ?>">
            <?php
            if (display_header_text()==true){
                echo '<h2>'.get_bloginfo( 'name' ) .'</h2>';
                echo '<span>'.get_bloginfo('description').'</span>';
            } else{
                  echo "";
            }
          ?>

        </a>
    </div>
    <nav class="header__nav__menu panel" id="panel">
                <ul>
                    <?php
                    if(!is_front_page()){
                        echo "<li class='menu__list'><a href='/' class='header__menu-link'>Home</a></li>";
                    }
                    ?>
                    <li class="menu__list"><?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'header-menu' ) ); ?></li>

                </ul>
            </nav>
    <button class="panel-btn hamburger hamburger--emphatic" type="button" aria-label="menu">
        <span class="hamburger-box">
            <span class="hamburger-inner" id="hamburguesa"></span>
        </span>
    </button>