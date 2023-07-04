<?php 
include("header.php");


         global $wpdb,$table_prefix;
         $wp_gms_movies = $table_prefix.'gms_movies';
         $results = $wpdb->get_results("SELECT * FROM $wp_gms_movies ");  


        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $no_of_records_per_page = 18;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = count($results);
        

       // $result = mysqli_query($conn,$total_pages_sql);
        $total_rows =  count($results);
        $total_pages = ceil($total_rows / $no_of_records_per_page);

       // $sql = "SELECT * FROM student LIMIT $offset, $no_of_records_per_page";
      $results2 = $wpdb->get_results("SELECT * FROM wp_gms_movies LIMIT $offset, $no_of_records_per_page");

        ?>
<div class="container " id="tr-main-cntnr" style="display: none;">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12"><!-- Start trailer container -->
            <div class="tlr-title-div">
                <h5 class="tlr-title"></h5>
                <button id="close-btn">Close Video Player</button>
            </div>
            <div class="iframe-div">
                         <iframe width="100%" height="500px" src="<?php echo $convertUrl;?>" frameborder="0" allow="" allowfullscreen></iframe>

             <div class="overlay">
             <div class="overlay-ads ">
              <h1>Ads Title</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eligendi non recusandae obcaecati, ipsa tempore id accusamus, corrupti quia perferendis laudantium deserunt mollitia necessitatibus, voluptatibus ab pariatur, magnam consequatur et minima</p>
              <a href="">Go Link</a>
             </div>
            </div>
            <button class="overlay-close-btn"><i class="fa fa-close"></i></button>



            </div>   
        </div><!-- End trailer container -->
    </div>


        <div class="tlr-overview">
        <div class="row shadow-sm p-4">
           <div class="col-sm-12 col-md-3 col-lg-3">
              <img alt="" class="tlr-image">
           </div>
           <div class="col-sm-12 col-md-9 col-lg-9">
              <h5 class="tlr-fullTitle"></h5>
              <div class="tlr-text"><strong>Description:</strong> <p class="tlr-videoDescription"></p></div>
              <div class="tlr-text"><strong>Type :</strong> <p class="tlr-type"></p></div>
              <div class="tlr-text"><strong>Year :</strong> <p class="tlr-year"></p></div>
              <div class="tlr-text"><strong>Release Date :</strong> <p class="tlr-releaseDate"></p></div>
              <div class="tlr-text"><strong>Actors :</strong> <p class="tlr-stars"></p></div>
              <div class="tlr-text"><strong>Genres :</strong> <p class="tlr-genres"></p></div>
              <div class="tlr-text"><strong>Languages :</strong> <p class="tlr-languages"></p></div>
              <div class="tlr-text"><strong>IMDB Rating :</strong> <p class="tlr-imDbRating"></p></div>
              <div class="tlr-text"><strong>IMDB RatingVotes :</strong> <p class="tlr-imDbRatingVotes"></p></div>
           </div>
        </div>
        </div> 

</div>


 <div class="container-fluid" id="main-movie-cntnr">
        <div class="row mt-3">
            <h5>TOP 250 MOVIES</h5>
            <hr>

            <?php $i =1; 

            foreach($results2 as $value){  

               $videoUrl   = $value->videoUrl;
               $convertUrl =  str_replace("watch?v=", "embed/", $videoUrl);

                ?>

    <div class="col-sm-3 col-lg-2 col-md-2 movie_col">

        <div class="movie-card">
            <div class="card-img">
                <img src="<?php print_r($value->image);?>" alt="" >
            </div>
            <div class="card-content">
            <h6 class="title"><?php print_r($value->title); ?></h6>
            <p><b>Year : </b> <?php print_r($value->year); ?></p>
            <p><b>RatingVotes : </b> <?php print_r($value->imDbRatingVotes); ?></p>
            <p><b><i class="fa-solid fa-star"></i> </b> <?php print_r($value->imDbRating); ?></p> 
            </div>
            <div class="card-footer-sec">

            <input type="hidden" id="<?php echo 'title'.$i; ?>" value="<?php print_r($value->title); ?>">
            <input type="hidden" id="<?php echo 'tr-id'.$i; ?>" value="<?php print_r($value->imDbId); ?>">
            <input type="hidden" id="<?php echo 'cnvrt-url'.$i; ?>" value="<?php print_r($convertUrl); ?>">

            <input type="hidden" id="<?php echo 'releaseDate'.$i; ?>" value="<?php print_r($value->releaseDate); ?>">
            <input type="hidden" id="<?php echo 'runtimeStr'.$i; ?>" value="<?php print_r($value->runtimeStr); ?>">
            <input type="hidden" id="<?php echo 'fullTitle'.$i; ?>" value="<?php print_r($value->fullTitle); ?>">
            <input type="hidden" id="<?php echo 'type'.$i; ?>" value="<?php print_r($value->type); ?>">
            <input type="hidden" id="<?php echo 'year'.$i; ?>" value="<?php print_r($value->year); ?>">
            <input type="hidden" id="<?php echo 'image'.$i; ?>" value="<?php print_r($value->image); ?>">
            <input type="hidden" id="<?php echo 'stars'.$i; ?>" value="<?php print_r($value->stars); ?>">
            <input type="hidden" id="<?php echo 'genres'.$i; ?>" value="<?php print_r($value->genres); ?>">
            <input type="hidden" id="<?php echo 'languages'.$i; ?>" value="<?php print_r($value->languages); ?>">
            <input type="hidden" id="<?php echo 'imDbRating'.$i; ?>" value="<?php print_r($value->imDbRating); ?>">
            <input type="hidden" id="<?php echo 'imDbRatingVotes'.$i; ?>" value="<?php print_r($value->imDbRatingVotes); ?>">
            <input type="hidden" id="<?php echo 'videoTitle'.$i; ?>" value="<?php print_r($value->videoTitle); ?>">
            <input type="hidden" id="<?php echo 'videoDescription'.$i; ?>" value="<?php print_r($value->videoDescription);?>">
            <input type="hidden" id="<?php echo 'videoUrl'.$i; ?>" value="<?php print_r($value->videoUrl );?>">
            <input type="hidden" id="<?php echo 'thumbnailUrl'.$i; ?>" value="<?php print_r($value->thumbnailUrl); ?>">
            <input type="hidden" id="<?php echo 'uploadDate'.$i; ?>" value="<?php print_r($value->uploadDate); ?>">


            <button type="button" class="btn-sm btn-info tlr-btn" id="<?php echo 'btn_'.$i; ?>">View Trailer
            </button>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        var btn_id = '<?php echo 'btn_'.$i; ?>' ; 

        $('#<?php echo 'btn_'.$i; ?>').click(function(){
           var title = $('#<?php echo 'title'.$i; ?>').val();
           var tr_id = $('#<?php echo 'tr-id'.$i; ?>').val();
           var v_url = $('#<?php echo 'cnvrt-url'.$i; ?>').val();

           var tlr_releaseDate = $('#<?php echo 'releaseDate'.$i; ?>').val();
           var tlr_runtimeStr = $('#<?php echo 'runtimeStr'.$i; ?>').val();
           var tlr_fullTitle = $('#<?php echo 'fullTitle'.$i; ?>').val();
           var tlr_type = $('#<?php echo 'type'.$i; ?>').val();
           var tlr_year = $('#<?php echo 'year'.$i; ?>').val();
           var tlr_image = $('#<?php echo 'image'.$i; ?>').val();
           var tlr_stars = $('#<?php echo 'stars'.$i; ?>').val();
           var tlr_genres = $('#<?php echo 'genres'.$i; ?>').val();
           var tlr_languages = $('#<?php echo 'languages'.$i; ?>').val();
           var tlr_imDbRating = $('#<?php echo 'imDbRating'.$i; ?>').val();
           var tlr_imDbRatingVotes = $('#<?php echo 'imDbRatingVotes'.$i; ?>').val();
           var tlr_videoTitle = $('#<?php echo 'videoTitle'.$i; ?>').val();
           var tlr_videoDescription = $('#<?php echo 'videoDescription'.$i; ?>').val();
           var tlr_videoUrl = $('#<?php echo 'videoUrl'.$i; ?>').val();
           var tlr_thumbnailUrl = $('#<?php echo 'thumbnailUrl'.$i; ?>').val();
           var tlr_uploadDate = $('#<?php echo 'uploadDate'.$i; ?>').val();




           $('iframe').attr('src',v_url);
           $('#main-movie-cntnr').css({"display":"none"});
           $('#tr-main-cntnr').css({"display":"block"});

           $('.tlr-title').html(title);
           $('.tlr-releaseDate').html(tlr_releaseDate);
           $('.tlr-runtimeStr').html(tlr_runtimeStr);
           $('.tlr-fullTitle').html(tlr_fullTitle);
           $('.tlr-type').html(tlr_type);
           $('.tlr-year').html(tlr_year);
           $('.tlr-image').attr('src',tlr_image);
           $('.tlr-stars').html(tlr_stars);
           $('.tlr-genres').html(tlr_genres);
           $('.tlr-languages').html(tlr_languages);
           $('.tlr-imDbRating').html(tlr_imDbRating);
           $('.tlr-imDbRatingVotes').html(tlr_imDbRatingVotes);
           $('.tlr-videoTitle').html(tlr_videoTitle);
           $('.tlr-videoDescription').html(tlr_videoDescription);
           $('.tlr-videoUrl').html(tlr_videoUrl);
           $('.tlr-thumbnailUrl').html(tlr_thumbnailUrl);
           $('.tlr-uploadDat').html(tlr_uploadDate);
        });

        $('#close-btn').click(function(){
           $('#main-movie-cntnr').css({"display":"block"});
           $('#tr-main-cntnr').css({"display":"none"});
        });
    });
</script>
       <?php $i++; } ?>
    </div>
           

    <ul class="pagination container mt-5 d-flex justify-content-around">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>


</div>
<script>
 $(document).ready(function(){
    $('.overlay-close-btn').click(function(){
      $('.overlay').css({"display":"none"})
    });
 });
</script>

<?php include("footer.php"); ?>



