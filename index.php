<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("song");
?>

 <h1>Songs</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $brand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
     $cost = $data->getElementsByTagName("cost")->item(0)->nodeValue;
     $year = $data->getElementsByTagName("year")->item(0)->nodeValue;
     $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
  
  echo $brand;
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
