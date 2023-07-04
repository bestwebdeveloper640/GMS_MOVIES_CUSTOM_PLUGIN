<?php 

	include('header.php');
	$API = API;
	
	function getImdbRecord($API)
	{
	    $path = "https://imdb-api.com/en/API/MostPopularTVs/".API." ";
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
           <div style="text-align: center;"><h5 >Most Popular TVs</h5><hr></div> <br><br><br>

        <?php 

			
                if (isset($_GET['pageno'])) 
                {                    
                    $pageno = $_GET['pageno'];                 
                } 
                else{                    
                     $pageno = 1;

                      }

                $no_of_records_per_page = 24;
                $offset = ($pageno-1) * $no_of_records_per_page;

                if($results==0){
                   echo"no result  found "; 
                   
                }else{


                     $count1=0;
                      foreach($results['items'] as $value){ 

                      $count1++;

                          }
                
                          $total_pages =$count1 / $no_of_records_per_page;                    

                        $count2=0;
                         foreach($results['items'] as $value){ 


                         if($count2>=$offset)
                          {

                             if($count2==($offset+$no_of_records_per_page))
                          {

                             break;
                         }
                       

             ?>

                    <div class="col-sm-6 col-lg-2 col-md-2 movie_col">
                       
                       <div class="card p-0" >
                        <div class="card-header p-0">
                            <div class="card-header-img-div">
                                 <img src="<?php print_r($value['image']);?>" alt="" >
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title"><?php print_r($value['title']); ?></h6>
                            <p><b>Year : </b> <?php print_r($value['year']); ?></p>
                            <p><b><i class="fa-solid fa-star"></i> </b> <?php print_r($value['imDbRating']); ?></p>

                        </div>
                       </div>
                    </div>
       <?php  
           

            }

             $count2++;
        }    
                
    } 
                
                
       $url = admin_url('/admin.php?page=frontend&mostpopulartvs=mostpopulartvs');          
                
     ?>

           
    </div>
                <div class="mt-5 text-center d-flex justify-content-center">
                <ul class="pagination" style="display: flex;justify-content: space-around;list-style: none;">
                
                <li style="margin-right: 30px;"><a href="<?php echo $url;?>&pageno=1">First Page</a></li>                
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>" style="margin-right: 30px;">
                <a href="<?php if($pageno <= 1){ echo '#';} else { echo $url."&pageno=".($pageno - 1);} ?>">Prev Page</a>
                </li>
                
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>" style="margin-right: 30px;">
                 <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo $url."&pageno=".($pageno + 1); } ?>">Next Page</a>
                </li>
                </ul>
                </div>
        
</div>


 <?php 

include('footer.php');
?>