<?php
/**
 * The template for displaying all pages.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

get_header(); ?>


<div class="container-fluid">
        <div class="row">
                <div class="col-sm-2 graycolored">
                <img class="logo-img img-fluid" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
                </div>
                <div class="col-sm-7 graycolored">
                        asdasdasdasd
                </div>
        </div>
        <div class="row">
                <div class="col-sm-2 graycolored">
                        <div class="header-additional-1">
                                <span>Дата</span>
                                <span>Погода</span>
                        </div>
                </div>
                <div class="col-sm-7 graycolored">
                        <?php 
                                $args = array(
                                        'child_of'            => 0,
                                        'current_category'    => 0,
                                        'depth'               => 1,
                                        'echo'                => 1,
                                        'exclude'             => '',
                                        'exclude_tree'        => '',
                                        'feed'                => '',
                                        'feed_image'          => '',
                                        'feed_type'           => '',
                                        'hide_empty'          => 1,
                                        'hide_title_if_empty' => false,
                                        'hierarchical'        => true,
                                        'order'               => 'ASC',
                                        'orderby'             => 'name',
                                        'separator'           => '<br />',
                                        'show_count'          => 0,
                                        'show_option_all'     => '',
                                        'show_option_none'    => __( 'No categories' ),
                                        'style'               => 'list',
                                        'taxonomy'            => 'category',
                                        'title_li'            =>'',
                                        'use_desc_for_title'  => 1,
                                    );
                                echo wp_list_categories($args); 
                        ?>
                </div>
        </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-5">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>

<?php get_footer(); ?>
