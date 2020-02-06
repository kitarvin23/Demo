<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL

 $content = $domOBJ->getElementsByTagName("item");
?>

 <h1>Tracks</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
    echo $title;
    echo $description;
    echo $link;
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
