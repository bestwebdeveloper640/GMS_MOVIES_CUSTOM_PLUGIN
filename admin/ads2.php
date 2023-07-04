<?php 
  include('header.php');
  ?>

<?php

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
?>
<div class="container mt-5">
<div class="col ads-div">
      <form action="" method="post">

        <strong><label for="ads2">Ads Section 2:</label></strong>&nbsp;&nbsp;&nbsp;

        <span class="success_msg"><?php  if(isset($success_msg2)){echo $success_msg2;} ?></span>
        <span class="err_msg"><?php  if(isset($err_msg2)){echo $err_msg2;} ?></span>
        <span class="success_msg"><?php  if(isset($del_msg2)){echo $del_msg2;} ?></span>
        <span class="del_err_msg"><?php  if(isset($del_err_msg2)){echo $del_err_msg2;} ?></span>

      <textarea class="form-control mt-2  mb-2" rows="5" name="ads2"  id="txt2"  placeholder="Please enter the code for ads"><?php echo ADS2;?></textarea> 
      <input type="submit" class="btn-sm btn-primary mb-1" name="submit2" id="submit2" value="Activate">

     </form>
      <form action="" method="post">
      <input type="submit" class="btn-sm btn-danger rmv-btn" name="remove2" id="remove2" value="Remove" style="display: none!important;">

      </form>
   </div>
   </div>


<script>
  $(document).ready(function(){
      const  ads2 = '<?php echo ADS2 ?>';
     
// alert(ads1);
       if(!ads2 == ''){
          $('#submit2').attr("disabled","");
          $('#txt2').attr("disabled","");
          $("#submit2").attr("value","Activated");
          $('#txt2').css({

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






<?php 
  include('footer.php');
  ?>