<footer>
    <nav class="footer-navigation">

            <a class="footer-navigation__logo" href="/">Home</a>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'menu_class' => 'footer-navigation__list',
                    'container' => '',
                    'theme_location' => 'footer'
                )
            );
            ?>


        <a class="footer-navigation__link link--arrow"
           href="">See Our Portfolio</a>
    </nav>
</footer>


<?php
wp_footer();
?>
</div>
</body>
</html>
