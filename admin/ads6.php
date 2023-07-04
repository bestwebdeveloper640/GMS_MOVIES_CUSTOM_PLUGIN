 <?php 
  include('header.php');
  ?> 
<?php 

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

 <div class="container mt-5">
     <div class="col ads-div">
        <form action="" method="post">

            <strong><label for="ads6">Ads Section 6:</label></strong>&nbsp;&nbsp;&nbsp;

                <span class="success_msg"><?php  if(isset($success_msg6)){echo $success_msg6;} ?></span>
                <span class="err_msg"><?php  if(isset($err_msg6)){echo $err_msg6;} ?></span>
                <span class="success_msg"><?php  if(isset($del_msg6)){echo $del_msg6;} ?></span>
                <span class="del_err_msg"><?php  if(isset($del_err_msg6)){echo $del_err_msg6;} ?></span>

            <textarea class="form-control mt-2 mb-2" rows="5"  name="ads6"  id="txt6" placeholder="Please enter the code for ads"><?php echo ADS6;?></textarea>  
            <input type="submit" class="btn-sm btn-primary mb-1" name="submit6" id="submit6" value="Activate"> 
        
        </form>
          <form action="" method="post">
            <input type="submit" class="btn-sm btn-danger rmv-btn" name="remove6" id="remove6" value="Remove" style="display: none!important;"> 

          </form>
    </div>
 </div>

<script>
    $(document).ready(function(){
      const  ads6 = '<?php echo ADS6 ?>';
     
// alert(ads1);
       if(!ads6 == ''){
         $('#submit6').attr("disabled","");
          $('#txt6').attr("disabled","");
          $("#submit6").attr("value","Activated");
          $('#txt6').css({

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