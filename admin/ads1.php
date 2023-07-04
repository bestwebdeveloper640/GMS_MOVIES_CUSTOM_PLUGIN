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
 ?>

<div class="container mt-2">
	<div style="text-align: center;">
 	 <h2>Here You Can Add Your Own Ads</h2><hr>
	 </div><br> 
	 <div class="col ads-div">

    	<form action="" method="post">

			<strong><label for="ads1">Ads Section 1:</label></strong>&nbsp;&nbsp;&nbsp;

				<span class="success_msg"><?php  if(isset($success_msg1)){echo $success_msg1;} ?></span>
				<span class="err_msg"><?php  if(isset($err_msg1)){echo $err_msg1;} ?></span>
				<span class="success_msg"><?php  if(isset($del_msg1)){echo $del_msg1;} ?></span>
				<span class="del_err_msg"><?php  if(isset($del_err_msg1)){echo $del_err_msg1;} ?></span>

			<textarea class="form-control mt-2 mb-2" rows="5" name="ads1" id="txt1" placeholder="Please enter the code for ads" ><?php echo ADS1;?></textarea>
			<input type="submit" class="btn-sm btn-primary mb-1" name="submit1" id="submit1" value="Activate">

		  </form>
		  <form action="" method="post">
		  	<input type="submit" class="btn-sm btn-danger rmv-btn" name="remove1" id="remove1" value="Remove" style="display: none!important;"> 			

		  </form>
    </div>

</div>



<script>
	$(document).click(function(){
      const  ads1 = '<?php echo ADS1 ?>';   

       if(!ads1 == ''){
       	  $('#submit1').attr("disabled","");
       	  $('#txt1').attr("disabled","");
       	  $("#submit1").attr("value","Activated");
       	  $('#txt1').css({

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



 <?php 
  include('footer.php');
  ?>