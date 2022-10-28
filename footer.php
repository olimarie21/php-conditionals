<?php ?>


</main> <!-- .site-main -->

<footer class="site-footer" id="site-footer">

  <!-- Social Menu -->
    <?php 
        wp_nav_menu( array(
            'theme_location'    =>  'menu-social',
            'container'         =>  'nav', 
            'container_class'   =>  'menu-container',
            'menu_class'        =>  'social-menu',
            'link_before'       =>  '<span class="screen-reader-text"',
            'link_after'        =>  '</span>'
        )); 
    ?>

    <p> &copy; 2021 Langara Bake Magazine</p>
</footer>

</div> <!-- .content-area -->
<?php wp_footer(); ?>
</body>

</html>