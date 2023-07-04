<?php 

	include('header.php');
	$API = API;
	
	function getImdbRecord($API)
	{
	    $path = "https://imdb-api.com/en/API/BoxOfficeAllTime/".API." ";
	    $json = file_get_contents($path);
	    return json_decode($json, TRUE);
	}

	$results = getImdbRecord(API);

	// echo "<pre>";
	// print_r($results);
	// echo "</pre>";
	// die;
 ?>

<div class="container-fluid">
    <div class="row mt-3">
           <div style="text-align: center;"><h5 >Box Office All Time</h5><hr></div> <br><br><br>

        <?php 

			foreach($results['items'] as $value){ ?>

            <div class="col-sm-6 col-lg-2 col-md-2 movie_col">
               
               <div class="card p-0" >
                <div class="card-header p-0">
                    <div class="card-header-img-div">
                         <!-- <img src="<?php// print_r($value['image']);?>" alt="" > -->
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="title"><?php print_r($value['title']); ?></h6>
                    <p><b>Year : </b> <?php print_r($value['year']); ?></p> 
                    <!-- <p><b><i class="fa-solid fa-star"></i> </b> <?php// print_r($value['imDbRating']); ?></p> -->

                </div>

               </div>


            </div>
       <?php  } ?>       
           
    </div>
        
</div>




 <?php 

include('footer.php');
?>