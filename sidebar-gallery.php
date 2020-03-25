<section class="sidebar-sec">
    <div class="sidebar">
        <h4>CATEGORY</h4>
        <ul>
            <?php
            wp_list_categories(array(
                'style' => 'list',
                'show_count' => 1,
                'hide_empty' => 0,
                'title_li' => '',
                'taxonomy' => 'gallery',
            ));
            ?>
        </ul>
    </div> <!-- sidebar -->
</section> <!-- sidebar-sec -->