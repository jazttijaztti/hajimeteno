<?php
//カスタム投稿タイプ

add_action('init', 'custom_blog_init');
function custom_blog_init(){

	$labels = array(
		'name' => '鮨いち',
		'singular_name' => '鮨いち',
		'all_items' => '投稿一覧',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,//管理画面・サイトへの表示の有無
		'publicly_queryable' => true,
		'show_ui' => true, //管理画面のメニューへの表示の有無
		'menu_position' => 5,//管理メニューでの表示位置
		'query_var' => true,
		'rewrite' => true,//パーマリンク設定
		'capability_type' => 'post',//権限タイプ
		'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
		'hierarchical' => false,//階層(親)の有無
		'menu_icon' => 'dashicons-admin-customizer',//アイコン画像
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
		'has_archive' => true//アーカイブの有無
	); 
	register_post_type('blog',$args);
}


//カスタム分類(カスタムタクソノミー)
function custom_blog_taxonomies() {
	//タクソノミー1
	$labels = array(
		"name" => _x( "鮨いちのブログ", "taxonomy general name" ),
		"singular_name" => _x( "鮨いちのブログ", "taxonomy singular name" ),
	);
	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'blog_cat', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "blog_cat", array( "blog" ), $args );

	//タクソノミー2
	$labels = array(
		"name" => _x( "鮨いちのブログ2", "taxonomy general name" ),
		"singular_name" => _x( "鮨いちのブログ2", "taxonomy singular name" ),
	);
	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'blog_cat2', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "blog_cat2", array( "blog" ), $args );
	//タクソノミータグ
	$labels = array(
		"name" => _x( "鮨いちのタグ", "taxonomy general name" ),
		"singular_name" => _x( "鮨いちのタグ", "taxonomy singular name" ),
	);
	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'blog_tag', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "blog_tag", array( "blog" ), $args );
}

add_action( 'init', 'custom_blog_taxonomies' );
?>
