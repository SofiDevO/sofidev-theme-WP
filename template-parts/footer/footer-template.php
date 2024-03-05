<footer class="footer__section">
    <a class="link__logo" href="<?php echo get_home_url(); ?>">
        <?php
        if (display_header_text() == true) {
            echo '<h2>' . get_bloginfo('name') . '</h2>';
        } else {
            echo "";
        }
        ?>
    </a>
    <div class="nav__container">
        <nav class="footer__nav" >
            <ul>
                <li class="menu__list">
                    <a href="#home" class="header__menu-link"><?php wp_nav_menu(array('container_class' => 'footer-menu', 'theme_location' => 'footer-menu')); ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>