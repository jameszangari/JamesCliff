<?php

// hook into the init action and call register_taxonomy_for_music when it fires

function register_taxonomy_for_project_dates() {
  $labels = [
  'name'              => _x('Dates', 'taxonomy general name'),
  'singular_name'     => _x('Dates', 'taxonomy singular name'),
  'search_items'      => __('Search Dates'),
  'all_items'         => __('All Dates'),
  'parent_item'       => __('Parent Dates'),
  'parent_item_colon' => __('Parent Dates:'),
  'edit_item'         => __('Edit Dates'),
  'update_item'       => __('Update Dates'),
  'add_new_item'      => __('Add New Dates'),
  'new_item_name'     => __('New Dates Name'),
  'menu_name'         => __('Dates'),
];

  // Now register the taxonomy
  register_taxonomy('project_dates', ['dates'], [
  'hierarchical'      => false,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'show_in_rest'      => true,
  'rewrite'           => ['slug' => 'dates'],
]);
}
add_action('init', 'register_taxonomy_for_project_dates');