<section class="sidebar-sec">
    <div class="sidebar">
        <h4 class="sidebar__categories">CATEGORY</h4>
        <ul>
            <?php
            wp_list_categories(array(
                'style' => 'list',
                'show_count' => 1,
                'hide_empty' => 0,
                'title_li' => '',
            ));
            ?>
        </ul>
        <h4 class="sidebar__archive">ARCHIVE</h4>
        <ul>
            <?php
            wp_get_archives(array(
                'show_post_count' => 1,
            ));
            ?>
        </ul>
    </div> <!-- sidebar -->
</section> <!-- sidebar-sec -->