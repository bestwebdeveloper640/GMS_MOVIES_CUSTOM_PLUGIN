
<?php 
	include('header.php');


	if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}
?>

<div class="container mt-3">
  <h2>Frontent</h2><br><br>
 
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="<?php echo admin_url();?>/admin.php?page=frontend&top250movies=<?php echo "top250movies";?>">Top250Movies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&top250tvs=<?php echo "top250tvs";?>">Top250TVs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&mostpopularmovies=<?php echo "mostpopularmovies";?>">MostPopularMovies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&mostpopulartvs=<?php echo "mostpopulartvs";?>">MostPopularTVs</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&intheaters=<?php echo "intheaters";?>">InTheaters</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&comingsoon=<?php echo "comingsoon";?>">ComingSoon</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&boxoffice=<?php echo "boxoffice";?>">BoxOffice</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&boxofficealltime=<?php echo "boxofficealltime";?>">BoxOfficeAllTime</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&name=<?php echo "name";?>">Name</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&nameawards=<?php echo "nameawards";?>">NameAwards</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&company=<?php echo "company";?>">Company</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&keyword=<?php echo "keyword";?>">Keyword</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=frontend&youtubetrailer=<?php echo "youtubetrailer";?>">YouTubeTrailer</a>
    </li>
  </ul>
</div>

<?php 

	if(isset($_GET['top250movies']))
    {
      include('top_250_movies.php');

    }
    if(isset($_GET['top250tvs']))
    {
      include('top_250_tvs.php');

    }
    if(isset($_GET['mostpopularmovies']))
    {
      include('most_popular_movies.php');

    }
    if(isset($_GET['mostpopulartvs']))
    {
      include('most_popular_tvs.php');

    }
    if(isset($_GET['intheaters']))
    {
      include('in_theaters.php');

    }
    if(isset($_GET['comingsoon']))
    {
      include('coming_soon.php');

    }
    if(isset($_GET['boxoffice']))
    {
      include('box_office.php');

    }
    if(isset($_GET['boxofficealltime']))
    {
      include('box_office_all_time.php');

    }
    if(isset($_GET['name']))
    {
      include('name.php');

    }
    if(isset($_GET['nameawards']))
    {
      include('name_awards.php');

    }
    if(isset($_GET['company']))
    {
      include('company.php');

    }
    if(isset($_GET['keyword']))
    {
      include('keyword.php');

    }if(isset($_GET['youtubetrailer']))
    {
      include('youtube_trailer.php');

    }
  

 ?>








<?php 
	include("footer.php");
?>