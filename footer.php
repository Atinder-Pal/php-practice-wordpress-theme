<?php wp_nav_menu( array(
            array(
                'theme_location' => 'footer_menu'
            )
        ) );
        ?>
    <footer>
        <h2><?php bloginfo( 'title' ); ?>Footer</h2>
        <p>
            &copy;
            <?php echo date( 'Y' ); ?>
            <a href="<?php echo site_url(); ?>">
                <?php bloginfo( 'title' ); ?>
            </a>
            All Rights Reserved.
            </p>
    </footer>

    <?php
        //Similar to wp_head(), but for footer scripts an doutput
        wp_footer();
    ?>
</body>
</html>
