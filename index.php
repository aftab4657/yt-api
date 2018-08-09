<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Youtube Data API</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/icon/icon.png">
    <style type="text/css">
      .ho:hover{
            cursor: pointer;
  }

      @media screen and (max-width: 650px) {
  .rsp {
        
        width: 100%;
        
  }
}

    </style>
  </head>
  <body>

    <nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">BRAND</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="#">Java Selenium</a></li>
      <li><a href="#">Protractor</a></li>
      <li><a href="#">Selenium [Python]</a></li>
      <li><a href="#">UiPath</a></li>
      <li><a href="#">Kotlin</a></li>
      <li><a href="#">JUnit</a></li>
      <li><a href="#">Mockito</a></li>
      <li><a href="#">Neo4J</a></li>
      <li><a href="#">Videos</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <form action="search.php" method="GET" class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input required="" name="searchBox" type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>

  </div>
</div>
</nav>


  <?php


        $ab_url = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDER1O-tTt6L3-1ALzV-3G8j6d4BeNElSY&channelId=UChO5ZYvc6LGAolKe2nofu6w&part=snippet,id&order=date&maxResults=50';
      $api_key = 'AIzaSyDER1O-tTt6L3-1ALzV-3G8j6d4BeNElSY';
      $playlist_id =  'PLPrmArKXI_bF-_HThKAw2R3RK83cT7Eu5'; 
      // $search_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=20&key=' . $api_key;
      $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId='. $playlist_id . '&key=' . $api_key;
      
$playlist = json_decode(file_get_contents($api_url));
?>

  <div class="container-fluid">
  <!-- <center> -->
    <?php 
    $vid_cls = 'abc';
    $i=0;
    $chk=0;  

   echo "<center>";
    foreach($playlist->items AS $item): 
    
    $chk++;
     
    ?>
    <div class="col-md-3 col-sm-12 col-xs-12">
  <img style="margin:5px;" class="img-rounded ho <?php echo $vid_cls; ?>" id="<?php echo $chk;?>" onclick="video_player('<?php echo $item->snippet->resourceId->videoId;  ?>','<?php echo $vid_cls;  ?>','<?php echo $chk;?>')" src="<?php echo $item->snippet->thumbnails->medium->url; ?>">  
   
  </div>
<?php 
$i++;
  if ($i==4) {
    ?>
    </center>
    <div class="container-fluid">
      <center>
      <div class="row">
      <div  class="col-md-12" id="<?php echo $vid_cls; ?>">
        
      </div>
    </div>
    </center>
    </div>
  <center>
<?php
    $vid_cls = rand();
    $i=0;
  }
endforeach; 

?>
   <div class="container">
      <center>
      <div class="row">
      <div  class="col-md-12" id="<?php echo $vid_cls; ?>">
        
      </div>
    </div>
    </center>
    </div>
   
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
  function video_player(v_id,v_holder_div_id,rsp_id) {
    
    $('#p_video').remove();
    var lnk = "https://www.youtube.com/watch?v="+v_id;
    var v_tag = "<iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%;' id='p_video' height='350' width='600' class='embed-responsive-items rsp' src=https://www.youtube.com/embed/"+v_id+"?autoplay=1 frameborder='0' allow='autoplay'; encrypted-media allowfullscreen></iframe>"
    
    var v_tagg = "<iframe id='p_video' height='350' width='600' class='embed-responsive-items rsp' src=https://www.youtube.com/embed/"+v_id+"?autoplay=1 frameborder='0' allow='autoplay'; encrypted-media allowfullscreen></iframe>";

    if ($(window).width()<992){
    $('#rsp').remove();
    $( '#'+rsp_id ).after( "<div style='position: relative;padding-bottom: 56.25%;height: 0; overflow: hidden;' id='rsp' class='col-md-12'> </div>" );
    // $( '#'+rsp_id ).after( "<br>" );
   
    $( '#rsp' ).append( v_tag );
  }
  else
    $( '#'+v_holder_div_id ).append( v_tagg );
    
      $(window).scrollTop($('.'+v_holder_div_id).offset().top);

  }

  function chk() {
    alert($(window).width());
  }

  // class_add_remaining();
</script>
  </body>
</html>
