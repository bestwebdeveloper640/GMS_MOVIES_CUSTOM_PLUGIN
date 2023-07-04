<?php 
  include('header.php');
  ?>
  <?php

   global $wpdb,$table_prefix;
  
  	 $wp_gms_ads=$table_prefix.'gms_ads';
		 $id=1;

		if(isset($_POST['submit1']))
		{

			$ads1=$_POST['ads1'];

					if($ads1 == ''){
							$err_msg1 =  "Please Enter Any Ads";
						}else{

							if($ads1 == ADS1){
								$err_msg1 =  "Ads is Already Exists";
							}else{
								
								$wpdb->get_results("UPDATE $wp_gms_ads SET ads1='$ads1' where id='$id'");
								if(!$ads1 == ''){
									$success_msg1 = "Ads Is Activating....";
									 echo '<meta http-equiv="refresh" content="3">';
								}else{
									$err_msg1 = "Ads Activation Failed";
								}
							}
						}			
		}


		if(isset($_POST['submit2']))
		{

			$ads2=$_POST['ads2'];
				if($ads2 == ''){
							$err_msg2 =  "Please Enter Any Ads";
						}else{

							if($ads2 == ADS2){
								$err_msg2 =  "Ads is Already Exists";
							}else{
								
								$wpdb->get_results("UPDATE $wp_gms_ads SET ads2='$ads2' where id='$id'");
								if(!$ads2 == ''){
									$success_msg2 = "Ads Is Activating....";
									 echo '<meta http-equiv="refresh" content="3">';
								}else{
									$err_msg2 = "Ads Activation Failed";
								}
							}
						}		
		}


		if(isset($_POST['submit3']))
		{

			$ads3=$_POST['ads3'];
			if($ads3 == ''){
							$err_msg3 =  "Please Enter Any Ads";
						}else{

							if($ads3 == ADS3){
								$err_msg3 =  "Ads is Already Exists";
							}else{
								
								$wpdb->get_results("UPDATE $wp_gms_ads SET ads3='$ads3' where id='$id'");
								if(!$ads3 == ''){
									$success_msg3 = "Ads Is Activating....";
									 echo '<meta http-equiv="refresh" content="3">';
								}else{
									$err_msg3 = "Ads Activation Failed";
								}
							}
						}			
		}

		if(isset($_POST['submit4']))
		{

			$ads4=$_POST['ads4'];
			if($ads4 == ''){
							$err_msg4 =  "Please Enter Any Ads";
						}else{

							if($ads4 == ADS4){
								$err_msg4 =  "Ads is Already Exists";
							}else{								

									$wpdb->get_results("UPDATE $wp_gms_ads SET ads4='$ads4' where id='$id'");
								if(!$ads4 == ''){
									$success_msg4 = "Ads Is Activating....";
									 echo '<meta http-equiv="refresh" content="3">';
								}else{
									$err_msg4 = "Ads Activation Failed";
								}
							}
						}					
		}

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

		if(isset($_POST['submit6']))
		{

			$ads6=$_POST['ads6'];
			if($ads6 == ''){
							$err_msg6 =  "Please Enter Any Ads";
						}else{

							if($ads6 == ADS6){
								$err_msg6 =  "Ads is Already Exists";
							}else{
								
								$wpdb->get_results("UPDATE $wp_gms_ads SET ads6='$ads6' where id='$id'");
								if(!$ads6 == ''){
									$success_msg6 = "Ads Is Activating....";
									 echo '<meta http-equiv="refresh" content="2">';
								}else{
									$err_msg6 = "Ads Activation Failed";
								}
							}
						}			
		}



if(isset($_POST['remove1'])){
		$ads1="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads1='$ads1' where id='$id'");

					if(!ADS1==''){
							$del_msg1 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
           
           }else{
           		$del_err_msg1 = "Ads is Already Removed ";
           	echo '<meta http-equiv="refresh" content="2">';
           

           }
}

if(isset($_POST['remove2'])){
		$ads2="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads2='$ads2' where id='$id'");
					if(!ADS2==''){
							$del_msg2 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
           
           }else{
           		$del_err_msg2 = "Ads is Already Removed  ";
           	echo '<meta http-equiv="refresh" content="2">';
           

           }
}

if(isset($_POST['remove3'])){
		$ads3="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads3='$ads3' where id='$id'");
					if(!ADS3==''){
							$del_msg3 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
           
           }else{
           		$del_err_msg3 = "Ads is Already Removed ";
           	echo '<meta http-equiv="refresh" content="2">';
           	
           }
}

if(isset($_POST['remove4'])){
		$ads4="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads4='$ads4' where id='$id'");
					if(!ADS4==''){
						 	$del_msg4 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
          
           }else{
           		$del_err_msg4 = "Ads is Already Removed  ";
           	echo '<meta http-equiv="refresh" content="2">';
           

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

if(isset($_POST['remove6'])){
		$ads6="";
            $wpdb->get_results("UPDATE $wp_gms_ads SET ads6='$ads6' where id='$id'");
					if(!ADS6==''){
							$del_msg6 = "Ads Is Removing....";
           	echo '<meta http-equiv="refresh" content="2">';
           
           }else{
           		$del_err_msg6 = "Ads is Already Removed  ";
           	echo '<meta http-equiv="refresh" content="2">';
           

           }
}


		 ?>


	<div class="container mt-3">
	<div style="text-align: center;">
 	 <h2>Here You Can Add Your Own Ads</h2><hr>
	 </div><br>    
 

   <div class="row mt-3">
    <div class="col ads-div">

    	<form action="" method="post">

			<strong><label for="ads1">Ads Section 1:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg1)){echo $success_msg1;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg1)){echo $err_msg1;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg1)){echo $del_msg1;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg1)){echo $del_err_msg1;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5" name="ads1" id="txt1"><?php echo ADS1;?></textarea>
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit1" id="submit1" value="Activate">

		  </form>
		  <form action="" method="post">
		  	<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove1" id="remove1" value="Remove" style="display: none!important;"> 			

		  </form>
    </div>
    <div class="col ads-div">
    	<form action="" method="post">

				<strong><label for="ads2">Ads Section 2:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg2)){echo $success_msg2;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg2)){echo $err_msg2;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg2)){echo $del_msg2;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg2)){echo $del_err_msg2;} ?></span>

			<textarea class="form-control mt-2  mb-2" rows="5" name="ads2"  id="txt2"><?php echo ADS2;?></textarea> 
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit2" id="submit2" value="Activate">

		 </form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove2" id="remove2" value="Remove" style="display: none!important;">

		  </form>
	 </div>
  </div>

   <div class="row mt-3">
    <div class="col ads-div">
    	<form action="" method="post">

				<strong><label for="ads3">Ads Section 3:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg3)){echo $success_msg3;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg3)){echo $err_msg3;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg3)){echo $del_msg3;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg3)){echo $del_err_msg3;} ?></span>

			<textarea class="form-control mt-2  mb-2" rows="5"  name="ads3" id="txt3"><?php echo ADS3;?></textarea>
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit3" id="submit3" value="Activate">

		</form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove3" id="remove3" value="Remove" style="display: none!important;">

		  </form>
    </div>
    <div class="col ads-div">
		<form action="" method="post">

				<strong><label for="ads4">Ads Section 4:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg4)){echo $success_msg4;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg4)){echo $err_msg4;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg4)){echo $del_msg4;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg4)){echo $del_err_msg4;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5"  name="ads4" id="txt4"><?php echo ADS4;?></textarea> 
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit4" id="submit4" value="Activate">
		</form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove4" id="remove4" value="Remove" style="display: none!important;">

		  </form>
	 </div>
  </div>


   <div class="row mt-3">
    <div class="col ads-div">
		<form action="" method="post">

			<strong><label for="ads5">Ads Section 5:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg5)){echo $success_msg5;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg5)){echo $err_msg5;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg5)){echo $del_msg5;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg5)){echo $del_err_msg5;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5"  name="ads5"  id="txt5"><?php echo ADS5;?></textarea>
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit5" id="submit5" value="Activate"> 

		</form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove5" id="remove5" value="Remove" style="display: none!important;">  	

		  </form>
    </div>
    <div class="col ads-div">
		<form action="" method="post">

			<strong><label for="ads6">Ads Section 6:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg6)){echo $success_msg6;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg6)){echo $err_msg6;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg6)){echo $del_msg6;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg6)){echo $del_err_msg6;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5"  name="ads6"  id="txt6"><?php echo ADS6;?></textarea>  
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit6" id="submit6" value="Activate"> 
 		
		</form>
		  <form action="" method="post">
 			<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove6" id="remove6" value="Remove" style="display: none!important;"> 

		  </form>
	</div>
  </div>

  
</div>




<script>
	$(document).ready(function(){
      const  ads1 = '<?php echo ADS1 ?>';
     
// alert(ads1);
       if(!ads1 == ''){
       	  $('#submit1').attr("disabled","");
       	  $('#txt1').attr("disabled","");
       	  $("#submit1").attr("value","Activated");
       	  $('.form-control').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove1').css({

       	  	"display":"block",
       	  });


       }

	});
</script>

<script>
	$(document).ready(function(){
      const  ads2 = '<?php echo ADS2 ?>';
     
// alert(ads1);
       if(!ads2 == ''){
       	  $('#submit2').attr("disabled","");
       	  $('#txt2').attr("disabled","");
       	  $("#submit2").attr("value","Activated");
       	  $('.form-control').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove2').css({

       	  	"display":"block",
       	  });


       }

	});
</script>

<script>
	$(document).ready(function(){
      const  ads3 = '<?php echo ADS3 ?>';
     
// alert(ads1);
       if(!ads3 == ''){
       	 $('#submit3').attr("disabled","");
       	  $('#txt3').attr("disabled","");
       	  $("#submit3").attr("value","Activated");
       	  $('.form-control').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove3').css({

       	  	"display":"block",
       	  });


       }

	});
</script>

<script>
	$(document).ready(function(){
      const  ads4 = '<?php echo ADS4 ?>';
     
// alert(ads1);
       if(!ads4 == ''){
       	 $('#submit4').attr("disabled","");
       	  $('#txt4').attr("disabled","");
       	  $("#submit4").attr("value","Activated");
       	  $('.form-control').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove4').css({

       	  	"display":"block",
       	  });
       }

	});
</script>

<script>
	$(document).ready(function(){
      const  ads5 = '<?php echo ADS5 ?>';
     
// alert(ads1);
       if(!ads5 == ''){
       	 $('#submit5').attr("disabled","");
       	  $('#txt5').attr("disabled","");
       	  $("#submit5").attr("value","Activated");
       	  $('.form-control').css({

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

<script>
	$(document).ready(function(){
      const  ads6 = '<?php echo ADS6 ?>';
     
// alert(ads1);
       if(!ads6 == ''){
       	 $('#submit6').attr("disabled","");
       	  $('#txt6').attr("disabled","");
       	  $("#submit6").attr("value","Activated");
       	  $('.form-control').css({

       	  	"border":"2px solid green",
       	  	"color":"green",
       	  	"box-shadow":"none",
       	  	"outline-none":"none",

       	  });
       	  $('#remove6').css({

       	  	"display":"block",
       	  });


       }

	});
</script>

<?php 

  include('footer.php');

  ?>
