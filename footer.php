    <footer class="footer">
        <div class="footer-nav">
            <h1 class="footer-nav__logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo-footer.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>
            <?php
            wp_nav_menu(array(
                'menu_class' => 'footer-nav__global-list',
                'container' => 'nav',
                'container_class' => 'footer-nav__global',
            ));
            ?>
        </div> <!-- footer-nav -->
        <p class="footer__copylight">
            <small>copyright ©sample site</small>
        </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
    <?php wp_footer(); ?>
    </body>

    </html>