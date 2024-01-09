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
                    <li class="menu__list"><a href="#home" class="header__menu-link">Home</a></li>
                    <li class="menu__list"><a href="#about" class="header__menu-link">About me</a></li>
                    <li class="menu__list"><a href="#skills" class="header__menu-link">Skills</a></li>
                    <li class="menu__list"><a href="#hoobies" class="header__menu-link">Hobbies</a></li>
                    <li class="menu__list"><a href="#contact" class="header__menu-link">Contact</a></li>
                </ul>
            </nav>
    <button class="panel-btn hamburger hamburger--emphatic" type="button" aria-label="menu">
        <span class="hamburger-box">
            <span class="hamburger-inner" id="hamburguesa"></span>
        </span>
    </button>