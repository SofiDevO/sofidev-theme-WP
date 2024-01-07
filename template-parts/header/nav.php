<?php
/*
*Header Navigation template
*@package Sofidev
*/
?>

<div class="logo">
        <?php the_custom_logo(); ?>
        <a  class="link__logo" href="<?php echo get_home_url(); ?>">
            <h2 ><?php bloginfo('name');?></h2>
            <span ><?php bloginfo( 'description' );?></span>

        </a>
    </div>
    <nav>
        <ul>
            <li><a href="">menu1</a></li>
            <li><a href="">menu2</a></li>
            <li><a href="">menu3</a></li>
            <li><a href="">menu4</a></li>
        </ul>
    </nav>