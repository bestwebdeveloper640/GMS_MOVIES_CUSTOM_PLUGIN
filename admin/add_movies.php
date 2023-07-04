<?php 
include("header.php");


 global $wpdb,$table_prefix;
 $wp_gms_movies = $table_prefix.'gms_movies';


 if(isset($_GET['id'])){
 	 $movie_id = $_GET['id'];
 }else{
 	echo "<div class='container text-center p-5 mt-4 bg-light'><h1 class='text-dark display-4 p-5'>NO Movie ID Found.</h1><p>Please click on the add Movie link <a href='".admin_url()."admin.php?page=all_movies'> Add Movie</a> </p><p>Please Change your Api Key</p><p>Settings > Api Settings <a href='".admin_url()."admin.php?page=settings'> Go Settings</a></p></div>";
 	die();
 }


 $query = $wpdb->prepare( "SELECT * FROM wp_gms_movies WHERE imDbId ='".$movie_id."' " );
 $row   = $wpdb->get_row($query);

  if(isset($row)){
 	 $f_imDbId = $row->imDbId;
 }else{
 	 $f_imDbId = "";
 }
 
 $API = API;


function getImdbRecord($API)
{

    $id = $_GET['id'];
   // $path = "https://imdb-api.com/en/API/Top250Movies/k_pkdivmkv";
    $path = "https://imdb-api.com/en/API/YouTubeTrailer/".API."/".$id;
    $json = file_get_contents($path);
    return json_decode($json, TRUE);
}

		$data  = getImdbRecord(API);

		$videoUrl        = $data["videoUrl"];
		$convertUrl      = str_replace("watch?v=", "embed/", $videoUrl);
		$year            = $data['year'];
		$fullTitle_data  = $data['fullTitle'];
		$errorMessage    = $data['errorMessage'];
    

function getImdbPoster($API)
{
	$id = $_GET['id'];
    // $path = "https://imdb-api.com/en/API/Posters/k_pkdivmkv/".$id;
    $path = "https://imdb-api.com/hi/API/Title/".API."/".$id."/FullCast,Posters,Images,Trailer,Ratings,";
    $json = file_get_contents($path);
    return json_decode($json, TRUE);
}

   $poster = getImdbPoster(API);

  
	  // echo "<pre>";
	  // print_r($poster);
	  // echo "</pre>";
 
   if(isset($poster)){

	$imDbId          = $poster['id'] ;
	$title           = $poster['title'] ;
	$fullTitle       = $poster['fullTitle'] ;
	$type            = $poster['type'] ;
	$image           = $poster['image'] ;
	$releaseDate     = $poster['releaseDate'] ;
	$runtimeStr      = $poster['runtimeStr'] ;
	$stars           = $poster['stars'] ;
	$genres          = $poster['genres'] ;
	$languages       = $poster['languages'] ;
	$imDbRating      = $poster['imDbRating'] ;
	$imDbRatingVotes = $poster['imDbRatingVotes'];

	$tr_videoId          = $poster['trailer']['videoId'];
	$tr_videoTitle       = $poster['trailer']['videoTitle'];
	$tr_videoDescription = $poster['trailer']['videoDescription'];
	$tr_uploadDate       = $poster['trailer']['uploadDate'];
	$tr_link             = $poster['trailer']['link'];
	$tr_linkEmbed        = $poster['trailer']['linkEmbed'];
	$thumbnailUrl        = $poster['trailer']['thumbnailUrl'];
}


  if(isset($_POST['submit'])){

    	$data = array(
          'imDbId' => $imDbId    ,
          'title' =>   $title   ,
          'fullTitle' => $fullTitle    ,
          'type' =>  $type   ,
          'year' =>  $year   ,
          'image' =>   $image  ,
          'releaseDate' => $releaseDate    ,
          'runtimeStr' =>  $runtimeStr  ,
          'stars' =>  $stars   ,
          'genres' =>   $genres  ,
          'languages' =>  $languages  ,
          'imDbRating' =>  	$imDbRating   ,
          'imDbRatingVotes' => $imDbRatingVotes   ,
          'videoId' =>  $tr_videoId   ,
          'videoUrl' =>   	$videoUrl ,
          'videoTitle' => $tr_videoTitle      ,
          'videoDescription' => $tr_videoDescription   ,
          'thumbnailUrl' =>  	$thumbnailUrl    ,
          'uploadDate' => $tr_uploadDate    ,
          'link' =>   	$tr_link   ,
          'linkEmbed' => $tr_linkEmbed    
    	);

        if($movie_id == $f_imDbId){
        	 $err_msg =" Movie Already Exists.";
        }else{

        	if($wpdb->insert($wp_gms_movies,$data)){
        		$success_msg = "Data Inserted Successfully";
        		
        	}else{
        		$err_msg = "Data Not Inserted.";
        	}
        

        }

    	
    }

?>

<div class="container text-center p-5 mt-4 ">
	<div class="row m-4 shadow-sm p-5 bg-light">
		<div class="col-sm-3 col-lg-3 col-md-3">
			<div class="img-div">
				<div class="card-header-img-div">
            <img src="<?php print_r($image);?>" class="card-img" >
         </div>
			</div>
		</div>
		<div class="col-sm-9 col-lg-9 col-md-9">
			<div class="d-flex justify-content-start flex-column align-items-start">
				<h6><?php print_r($title); ?></h6>
         <p><b>Year : </b> <?php print_r($year); ?></p>
         <p><b>Genres : </b> <?php print_r($genres); ?></p>
         <p><b>Language : </b> <?php print_r($languages); ?></p>
         <p><b>Description :</b><?php print_r($tr_videoDescription); ?></p>
         <p><b><i class="fa-solid fa-star"></i></b> <?php print_r($imDbRating); ?></p>
			</div>
		</div>
	</div>


	<form action="" method="post">
	<input type="submit" name="submit" class="btn btn-info" value="Add Movie in Database">
	<a href="<?php echo admin_url();?>admin.php?page=all_movies" class="btn btn-primary">Go Back</a>
  </form>
  

 <h1 class='text-success display-4 '><?php if(isset($success_msg)){echo $success_msg;} ?></h1>
 <h1 class='text-danger display-4 '><?php if(isset($err_msg)){echo $err_msg;} ?></h1>
</div>



 <?php 

 include('footer.php');

  ?>