<?php 

/*

* Plugin Name: GMS MOVIES NEW 
* Description: This is Custom Plugin for Movies Website By GMS
* Version: 1.0.0
* Author: Pawan Kumar
* Author URI: http://localhost/website/

*/





define('PLUGINS_DIR_PATH',plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());



// Load plugin class files.
require_once 'frontend/templates/movie_trailer.php';



 global $wpdb,$table_prefix;
 $wp_imdb_api = $table_prefix.'imdb_api';
 $result = $wpdb->get_results("SELECT * FROM $wp_imdb_api ");



if(!empty($result[0]->imDbId_api)){
   $F_API =$result[0]->imDbId_api ;  
}else{
    $F_API ="";
}

if(!empty($result[0]->id)){
    $F_API_ID = $result[0]->id ;  
}else{
     $F_API_ID="";
}


 define( 'API', $F_API);
 define( 'API_ID', $F_API_ID);


//for gms_ads

$wp_gms_ads = $table_prefix.'gms_ads'; 
$data = $wpdb->get_results("SELECT * FROM $wp_gms_ads "); 

if(!empty($data[0]->ads1)){
    $ads_1 = $data[0]->ads1 ;  
}else{
     $ads_1="";
}

if(!empty($data[0]->ads2)){
    $ads_2 = $data[0]->ads2 ;  
}else{
     $ads_2="";
}

if(!empty($data[0]->ads3)){
    $ads_3 = $data[0]->ads3 ;  
}else{
     $ads_3="";
}

if(!empty($data[0]->ads4)){
    $ads_4 = $data[0]->ads4 ;  
}else{
     $ads_4="";
}

if(!empty($data[0]->ads5)){
    $ads_5 = $data[0]->ads5 ;  
}else{
     $ads_5="";
}

if(!empty($data[0]->ads6)){
    $ads_6 = $data[0]->ads6 ;  
}else{
     $ads_6="";
}

 define( 'ADS1', $ads_1);
 define( 'ADS2', $ads_2);
 define( 'ADS3', $ads_3);
 define( 'ADS4', $ads_4);
 define( 'ADS5', $ads_5);
 define( 'ADS6', $ads_6);



// for security 
if(!defined('ABSPATH')){
    header("Location:/wp_test");
    die();
}

function my_plugin_activate(){
   global $wpdb,$table_prefix;
   $wp_gms_movies = $table_prefix.'gms_movies';
   $wp_imdb_api = $table_prefix.'imdb_api';
   $wp_gms_ads=$table_prefix.'gms_ads';

   $q = "CREATE TABLE IF NOT EXISTS $wp_gms_movies (`id` INT(15) NOT NULL AUTO_INCREMENT , `imDbId` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `fullTitle` TEXT NOT NULL , `type` VARCHAR(255) NOT NULL ,`year` INT(11) NOT NULL, `image` TEXT NOT NULL , `releaseDate` VARCHAR(255) NOT NULL , `runtimeStr` VARCHAR(255) NOT NULL , `stars` VARCHAR(255) NOT NULL , `genres` VARCHAR(255) NOT NULL , `languages` VARCHAR(255) NOT NULL , `imDbRating` FLOAT NOT NULL , `imDbRatingVotes` FLOAT NOT NULL , `videoId` VARCHAR(255) NOT NULL , `videoUrl` TEXT NOT NULL , `videoTitle` VARCHAR(255) NOT NULL , `videoDescription` TEXT NOT NULL , `thumbnailUrl` TEXT NOT NULL , `uploadDate` VARCHAR(255) NOT NULL , `link` TEXT NOT NULL , `linkEmbed` TEXT NOT NULL , `add_on` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
   ";
$wpdb->query($q);

  $q2 = "CREATE TABLE IF NOT EXISTS $wp_imdb_api (`id` INT(11) NOT NULL AUTO_INCREMENT , `imDbId_api` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
   ";
$wpdb->query($q2);

 $q3 = "CREATE TABLE IF NOT EXISTS $wp_gms_ads (`id` INT(11) NOT NULL AUTO_INCREMENT , `ads1` text NOT NULL , `ads2` text NOT NULL , `ads3` text NOT NULL , `ads4` text NOT NULL ,  `ads5` text NOT NULL ,  `ads6` text NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
   ";
$wpdb->query($q3);

    $data2=array(
            'id'=>'1',
            'ads1'=>'Please enter the code for ads',
            'ads2'=>'Please enter the code for ads',
            'ads3'=>'Please enter the code for ads',
            'ads4'=>'Please enter the code for ads',
            'ads5'=>'Please enter the code for ads',
            'ads6'=>'Please enter the code for ads'
    );
    $wpdb->insert($wp_gms_ads,$data2);




    $data = array(
          'imDbId' => 'tt0468569'   ,
          'title' =>   'The Dark Knight'   ,
          'fullTitle' => 'The Dark Knight (2008)'    ,
          'type' =>  'Movie'   ,
          'year' =>  2008   ,
          'image' =>   'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_Ratio0.6762_AL_.jpg'  ,
          'releaseDate' => '2008-07-18'   ,
          'runtimeStr' =>  '2h 32min'  ,
          'stars' =>  'Christian Bale, Heath Ledger, Aaron Eckhart'   ,
          'genres' =>   'गतिविधि, अपराध, नाटक'  ,
          'languages' =>  'अंग्रेज़ी, अकर्मण्य'  ,
          'imDbRating' =>  	9  ,
          'imDbRatingVotes' => '2609750'   ,
          'videoId' =>  'https://www.imdb.comvi324468761'  ,
          'videoUrl' =>   'https://www.youtube.com/watch?v=kmJLuwP3MbY' ,
          'videoTitle' =>'DVD Trailer'     ,
          'videoDescription' => 'Trailer for Blu-ray/DVD release of most recent Batman installment'   ,
          'thumbnailUrl' =>  	'https://m.media-amazon.com/images/M/MV5BNWJkYWJlOWMtY2ZhZi00YWM0LTliZDktYmRiMGYwNzczMTZhXkEyXkFqcGdeQXVyNzU1NzE3NTg@._V1_.jpg'    ,
          'uploadDate' => '11/05/2008 06:59:18'    ,
          'link' =>   	'https://www.imdb.com/video/https://www.imdb.comvi324468761'   ,
          'linkEmbed' => 'https://www.imdb.com/video/imdb/https://www.imdb.comvi324468761/imdb/embed'    
    	);

    $wpdb->insert($wp_gms_movies,$data);
}
register_activation_hook(__FILE__, 'my_plugin_activate');



function my_plugin_deactivation(){
    global $wpdb,$table_prefix;
    $wp_gms_movies = $table_prefix.'gms_movies';
    $wp_imdb_api = $table_prefix.'imdb_api';
    $wp_gms_ads=$table_prefix.'gms_ads';


    $q = "TRUNCATE $wp_gms_movies";
    $q2 = "TRUNCATE $wp_imdb_api";
    $q3 = "TRUNCATE $wp_gms_ads";
    $wpdb->query($q);
    $wpdb->query($q2);
    $wpdb->query($q3);
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivation');



function gms_movie_menu()
{

 add_menu_page( 'GMS Movie', 'GMS Movies', 'manage_options', 'dashboard',  'dashboard_page_load');
 add_submenu_page('dashboard', 'Settings', 'Settings', 'manage_options', 'settings', 'add_api_page_load');
 add_submenu_page('dashboard', 'all Movies', 'All Movies', 'manage_options', 'all_movies', 'all_movies_page_load');
 add_submenu_page('dashboard', 'Add Movies', 'Add Movies', 'manage_options', 'add_movies', 'add_movies_page_load');
 add_submenu_page('dashboard', 'Add TvShow', 'Add TvShow', 'manage_options', 'add_tvshow', 'add_tvshow_page_load');
 add_submenu_page('dashboard', 'Local Server Movies', 'Local Server Movies', 'manage_options', 'local_server_movies', 'list_local_server_movies');


    add_submenu_page('dashboard', 'Frontend', 'Frontend', 'manage_options', 'frontend', 'frontend');


}
add_action('admin_menu','gms_movie_menu');


function add_api_page_load()
{
	include('admin/settings.php');
}

function dashboard_page_load()
{
	include('admin/dashboard.php');
}

function all_movies_page_load()
{
	include('admin/all_movies.php');
}

function add_movies_page_load()
{
	include('admin/add_movies.php');
}

function add_tvshow_page_load()
{
	include('admin/add_tvshow.php');
}

function list_local_server_movies()
{
	include('admin/list_local_server_movies.php');
}

function frontend()
{
    include('frontend/main_frontend.php');
}



function tbare_wordpress_plugin_demo($atts) {
	$Content = "<style>\r\n";
	$Content .= "h3.demoClass {\r\n";
	$Content .= "color: #26b158;\r\n";
	$Content .= "}\r\n";
	$Content .= "</style>\r\n";
	$Content .= include('admin/list_local_server_movies.php');

    return $Content;

}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');

       
function list_wordpress_plugin_demo($atts) {
	$Content = "<style>\r\n";
	$Content .= "h3.demoClass {\r\n";
	$Content .= "color: #26b158;\r\n";
	$Content .= "}\r\n";
	$Content .= "</style>\r\n";
	$Content .= include('admin/list_of_all_movies.php');

    return $Content;
}

add_shortcode('list-plugin-demo', 'list_wordpress_plugin_demo');


function top_250_movies_demo($atts) {
  include('frontend/top_250_movies.php');
}

add_shortcode('TOP_250_MOVIES_SC', 'top_250_movies_demo');



function top_250_tvs_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/top_250_tvs.php');

    return $Content;
}

add_shortcode('TOP_250_TVS_SC', 'top_250_tvs_demo');


function most_popular_movies_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/most_popular_movies.php');

    return $Content;
}

add_shortcode('MOST_POPULAR_MOVIES_SC', 'most_popular_movies_demo');


function most_popular_tvs_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/most_popular_tvs.php');

    return $Content;
}

add_shortcode('MOST_POPULAR_TVS_SC', 'most_popular_tvs_demo');


function in_theaters_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/in_theaters.php');

    return $Content;
}

add_shortcode('IN_THEATERS', 'in_theaters_demo');


function coming_soon_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/coming_soon.php');

    return $Content;
}

add_shortcode('COMING_SOON_SC', 'coming_soon_demo');

function box_office_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/box_office.php');

    return $Content;
}

add_shortcode('BOX_OFFICE_SC', 'box_office_demo');

function box_office_all_time_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/box_office_all_time.php');

    return $Content;
}

add_shortcode('BOX_OFFICE_ALL_TIME_SC', 'box_office_all_time_demo');


function name_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/name.php');

    return $Content;
}

add_shortcode('NAME_SC', 'name_demo');


function name_awards_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/name_awards.php');

    return $Content;
}

add_shortcode('NAME_AWARDS_SC', 'name_awards_demo');

function company_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/company.php');

    return $Content;
}

add_shortcode('COMPANY_SC', 'company_demo');

function keyword_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/keyword.php');

    return $Content;
}

add_shortcode('KEYWORD_SC', 'keyword_demo');


function youtube_trailer_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('frontend/youtube_trailer.php');

    return $Content;
}

add_shortcode('YOUTUBE_TRAILER_SC', 'youtube_trailer_demo');


//######################### shortcode of ads ######################################



function frontend_ads1_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads1.php');

    return $Content;
}

add_shortcode('ADS_SC1', 'frontend_ads1_on_videos_demo');


function  frontend_ads2_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads2.php');

    return $Content;
}

add_shortcode('ADS_SC2', 'frontend_ads2_on_videos_demo');


function  frontend_ads3_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads3.php');

    return $Content;
}

add_shortcode('ADS_SC3', 'frontend_ads3_on_videos_demo');


function  frontend_ads4_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads4.php');

    return $Content;
}

add_shortcode('ADS_SC4', 'frontend_ads4_on_videos_demo');


function  frontend_ads5_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads5.php');

    return $Content;
}

add_shortcode('ADS_SC5', 'frontend_ads5_on_videos_demo');


function  frontend_ads6_on_videos_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= include('admin/ads_frontend/frontend_ads6.php');

    return $Content;
}

add_shortcode('ADS_SC6', 'frontend_ads6_on_videos_demo');

 ?>