 <?php 
  include('header.php');
  ?>

<?php 
	
		if(isset($_POST['submit5']))
		{

			$ads5=$_POST['ads5'];
			if($ads5 == ''){
			$err_msg5 =  "Please Enter Any Ads";
			}else{
			if($ads5 == ADS5){
				$err_msg5 =  "Ads is Already Exists";
				}else{								
           		$wpdb->get_results("UPDATE $wp_gms_ads SET ads5='$ads5' where id='$id'");
				if(!$ads5 == ''){
					$success_msg5 = "Ads Is Activating....";
					 echo '<meta http-equiv="refresh" content="2">';
						}else{
						$err_msg5 = "Ads Activation Failed";
						}
				}
			}			
		}

		if(isset($_POST['remove5'])){
		$ads5="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads5='$ads5' where id='$id'");
					if(!ADS5==''){
						 	$del_msg5 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
          
           }else{
           		$del_err_msg5 = "Ads is Already Removed ";
           	echo '<meta http-equiv="refresh" content="2">';
           

           }
		}
 ?>

 <div class="container mt-5">
 	 <div class="col ads-div">
		<form action="" method="post">

			<strong><label for="ads5">Ads Section 5:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg5)){echo $success_msg5;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg5)){echo $err_msg5;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg5)){echo $del_msg5;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg5)){echo $del_err_msg5;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5"  name="ads5"  id="txt5" placeholder="Please enter the code for ads"><?php echo ADS5;?></textarea>
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit5" id="submit5" value="Activate"> 

		</form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove5" id="remove5" value="Remove" style="display: none!important;">  	

		  </form>
    </div>
 </div>



<script>
	$(document).ready(function(){
      const  ads5 = '<?php echo ADS5 ?>';
     
// alert(ads1);
       if(!ads5 == ''){
       	 $('#submit5').attr("disabled","");
       	  $('#txt5').attr("disabled","");
       	  $("#submit5").attr("value","Activated");
       	  $('#txt5').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove5').css({

       	  	"display":"block",
       	  });
       }
	});
</script>


 <?php 
  include('footer.php');
  ?>