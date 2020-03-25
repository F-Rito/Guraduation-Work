<nav class="pagination">
  <?php
  $big = 999999999;
  echo paginate_links(array(
    "base" => str_replace($big, "%#%", esc_url(get_pagenum_link($big))),
    "show_all" => true,
    "type" => "list",
    "format" => "?paged=%#%",
    "current" => max(1, get_query_var("paged")),
    "total" => $wp_query->max_num_pages,
    "prev_text" => "",
    "next_text" => ""
  ));
  ?>
</nav>