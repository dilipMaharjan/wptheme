<?php //this is footer      ?>
<footer class="footer">
    <nav>
        <?php
        wp_nav_menu($args = array(
            'menu_class' => 'footer-navigation',
            'theme_location' => 'footer'
        ));
        ?>
    </nav>
    <p class="copyright">
        <small>All content on this site &copy; Glass Eye Creative</small>
    </p>
</footer>
<?php wp_footer(); ?>
</body>

</html>