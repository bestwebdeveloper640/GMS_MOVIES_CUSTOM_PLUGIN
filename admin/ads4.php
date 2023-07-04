<?php 
  include('header.php');
?>
<?php 
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

 ?>

 <div class="container mt-5">
   
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



<script>
  $(document).ready(function(){
      const  ads4 = '<?php echo ADS4 ?>';
     
// alert(ads1);
       if(!ads4 == ''){
         $('#submit4').attr("disabled","");
          $('#txt4').attr("disabled","");
          $("#submit4").attr("value","Activated");
          $('#txt4').css({

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




 <?php 
  include('footer.php');
  ?>