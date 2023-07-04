<?php 
  include('header.php');
?>

<?php 


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


 ?>


<div class="container mt-5">
   <div class="col ads-div">
      <form action="" method="post">

        <strong><label for="ads3">Ads Section 3:</label></strong>&nbsp;&nbsp;&nbsp;

        <span class="success_msg"><?php  if(isset($success_msg3)){echo $success_msg3;} ?></span>
        <span class="err_msg"><?php  if(isset($err_msg3)){echo $err_msg3;} ?></span>
        <span class="success_msg"><?php  if(isset($del_msg3)){echo $del_msg3;} ?></span>
        <span class="del_err_msg"><?php  if(isset($del_err_msg3)){echo $del_err_msg3;} ?></span>

      <textarea class="form-control mt-2  mb-2" rows="5"  name="ads3" id="txt3" placeholder="Please enter the code for ads" ><?php echo ADS3;?></textarea>
      <input type="submit" class="btn-sm btn-primary mb-1" name="submit3" id="submit3" value="Activate">

    </form>
      <form action="" method="post">
      <input type="submit" class="btn-sm btn-danger rmv-btn" name="remove3" id="remove3" value="Remove" style="display: none!important;">

      </form>
    </div>  

</div>


<script>
  $(document).ready(function(){
      const  ads3 = '<?php echo ADS3 ?>';     

       if(!ads3 == ''){
         $('#submit3').attr("disabled","");
          $('#txt3').attr("disabled","");
          $("#submit3").attr("value","Activated");
          $('#txt3').css({

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


 <?php 
  include('footer.php');
  ?>