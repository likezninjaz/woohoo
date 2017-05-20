<?php
/**
 * @license For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package Woohoo News Theme
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$def_options = array(
    'bd_setting' => array(
        'bd_lazyload'                       => 1,
        'bd_LiveSearch'                     => 1,
        'responsive'                        => 1,
        'sticky_sidebar'                    => 1,
        'bdayh_header_style'                => 'header_v1',
        'bdTimeFormat'                      => 'modern',
        'logo_displays'                     => 'logo_image',
        'site_sidebar_position'             => 'sideRight',
        'article_sidebar_position'          => 'sideRight',
        'header_fix'                        => 1,
        'show_top_bar' 						=> 0,
        'slider_show' 						=> 0,
        'show_top_search_right' 			=> 1,
        'show_top_menu_right' 				=> 1,
        'show_top_social_right' 			=> 1,
        'footer_copyright'  				=> 1,
        'footer_copyright_text' 			=> '&#169; Copyright 2016, All Rights Reserved Powered by <a href="http://www.wordpress.com">WordPress</a> | Designed by <a href="http://themeforest.net/user/bdaia">Bdaia</a>',
        'posts_slideshow_number' 			=> '10',
        'post_tags' 						=> 1,
        'post_pagination' 					=> 1,
        'post_author_box' 					=> 1,
        'post_comments_box' 				=> 1,
        'post_comments_valid' 				=> 1,
        'post_meta' 						=> 1,
        'post_meta_author' 					=> 1,
        'post_meta_cats' 					=> 1,
        'post_meta_date' 					=> 1,
        'post_meta_comments' 				=> 1,
        'article_related_numb' 				=> '3',
        'social_displays' 					=> 'sharing_box_v1',
        'sharing_facebook' 					=> 1,
        'sharing_twitter' 					=> 1,
        'sharing_linkedin' 					=> 1,
        'sharing_reddit' 					=> 1,
        'sharing_tumblr' 					=> 1,
        'sharing_google' 					=> 1,
        'sharing_pinterest' 				=> 1,
        'social_facebook_url'               => 'https://www.facebook.com/Ra7ala.Shots',
        'social_twitter_url'                => 'https://twitter.com/bdayh',
        'social_google_plus_url'            => 'https://plus.google.com/+amrsadek',
        'social_dribbble_url'               => 'https://dribbble.com/bdayh',
        'social_vimeo_url'                  => 'https://vimeo.com/bdayh',
        'slider_excerpt_show'               => 1,
        'slider_speed'                      => '6000',
        'slider_animation'                  => '500',
        'slider_bumber'                     => '5',
        'slider_display'                    => 'lates',
        'all_featured_image'                => 'fea_link',
        'gallery_featured_image'            => 'fea_lightbox',
        'fea_width'                         => '800',
        'fea_height'                        => '500',
        'blog_display'                      => 'content',
        'social_sharing_box' 				=> 1,
        'aq_resize_op' 					    => 1,
        'post_heart_like' 					=> 1,
        'post_meta_views' 					=> 1,
        'mobile_menu' 					    => 1,
        'mobile_search' 					=> 1,
        'mobile_social' 					=> 1,
        'topBarMobile' 					    => 1,
        'bd_post_carousel' 				    => 0,
        'bd_post_carousel_ap' 				=> 1,
        'bd_post_carousel_an' 				=> 1,
        'bd_post_carousel_cn' 				=> 1,
        'bd_post_carousel_d' 				=> 1,
        'bd_post_carousel_pos' 				=> 'after',
        'bd_post_carousel_posts_order' 	    => 'lates',
        'bd_post_carousel_np' 				=> '5',
        'check_also_position' 				=> 'right',
        'check_also_query' 				    => 'author',
        'check_also' 				        => 1,
        'post_reading_position_indicator' 	=> 1,
        'bdayh_main_menu_search' 	        => 1,
        'footerWidgetsColumns' 	            => 'col_three',
        'bdayhFooterSocialLinks' 	        => 1,
        'bdayhGoTop' 	                    => 1,
        'post_meta_timeread' 	            => 1,
        'bdayh_blog_cats_colors'            => 1,
        'bdayh_ThemeSkin' 	                => 'light',
        'background_displays' 	            => 'bg_pattren',
        'words_per_minute' 	                => '90',
        'bdaia_latest_news_headline' 	    => 'Latest News',
        'bdaia_latest_news_num' 	        => '10',
        'bdaia_latest_news_pagination' 	    => 'loadmore',
        'home_type' 	                    => 'latest_v1',
        'home_featured_image' 	            => 1,
        'bdaia_related' 	                => 1,
        'bdaia_related_author' 	            => 1,
        'bdaia_related_cat' 	            => 1,
        'bdaia_p_breadcrumbs' 	            => 1,
        'bdaia_p_categories_tags' 	        => 1,
        'bdaia_p_author_name' 	            => 1,
        'bdaia_p_date' 	                    => 1,
        'bdaia_p_time_read' 	            => 1,
        'bdaia_p_post_views' 	            => 1,
        'bdaia_p_post_like' 	            => 1,
        'bdaia_p_comment_count' 	        => 1,
        'bdaia_p_post_tags' 	            => 1,
        'bdaia_p_next_prev' 	            => 1,
        'bdaia_p_author_box' 	            => 1,
        'bdaia_p_top_sharing' 	            => 1,
        'bdaia_p_bottom_sharing' 	        => 1,
        'bdaia_p_featured_image' 	        => 1,
        'bdaia_s_sidebar_pos' 	            => 'sideRight',
        'bdaia_p_sidebar_pos' 	            => 'sideRight',
        'article_related_numb_postStyle3' 	=> '5',
        'bdaia_blog_display' 	            => 'blockStyle1',
        'author_blog_display' 	            => 'blockStyle4',
        'bdaia_topbar' 	                    => 1,
        'bdaia_ct_format' 	                => "F d, Y",
        'bdaia_tb_right_content' 	        => "social",
        'bdaia_t_title' 	                => "Trending Now",
        'bdaia_head_bn_title' 	            => "Breaking News",
        'bdaia_head_bn_home' 	            => 1,
        'bdaia_mn_position' 	            => 'below_header',
        'bdaia_new_articles_npost' 	        => '12',
        'bdaia_all_lightbox' 	            => 1,
        'notify_theme' 	                    => 1,
        'bdaia_theme_layout' 	            => 'wide',
        'bdaia_jpeg_quality' 	            => 'jpeg_quality_60',
    )
);