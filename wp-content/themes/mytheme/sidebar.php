<?php
/* The template for the main sidebar */
?>
<?php if (is_active_sidebar('main-sidebar')): ?>
    <aside class="sidebar widget-area">
        <?php dynamic_sidebar(); ?>
    </aside>
<?php endif; ?>


