<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL

 $content = $domOBJ->getElementsByTagName("item");
?>

 <h1>Songs</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $album = $data->getElementsByTagName("album")->item(0)->nodeValue;

    echo $title;
    echo $link;
    echo $description;
    echo $album;
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
