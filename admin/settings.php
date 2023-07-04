  <?php 
  include('header.php');


  ?>

 
<div class="container mt-3">
  <h2>Plugin Settings</h2>
  <br><br>
 
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="<?php echo admin_url();?>/admin.php?page=settings&api_settings=<?php echo "api_settings";?>">Api Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=settings&titles=<?php echo "titles";?>">Titles</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=settings&request=<?php echo "request"?>">Request</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=settings&advanced=<?php echo "advanced"?>">Advanced</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=settings&ads=<?php echo "ads"?>">Ads</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo admin_url();?>/admin.php?page=settings&shortcode=<?php echo "shortcode"?>"> All Movies Shortcodes</a>
    </li>
  </ul>
</div>



  <?php 

    if(isset($_GET['api_settings']))
    {
      include('add_api.php');

    }

    if(isset($_GET['titles']))
    {
       include('titles.php');    
    }

    if(isset($_GET['request']))
    {
      include('request.php');
    
    }
    if(isset($_GET['advanced']))
    {
      // include('advanced.php');
            include('flowplayer.php');

    
    }
    if(isset($_GET['ads']))
    {
       // include('ads.php');
    
     include('ads1.php');
     include('ads2.php');
     include('ads3.php');
     include('ads4.php');
     include('ads5.php');
     include('ads6.php');



      // include('ads_frontend/frontend_ads1.php');

    }
     if(isset($_GET['shortcode']))
    {
      // include('advanced.php');
            include('shortcode.php');

    
    }
  
  ?>

 <?php 

include("footer.php");

  ?>
 
