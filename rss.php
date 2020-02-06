<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/index.php");//XML page URL
 
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
     $album = $data->getElementsByTagName("album")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Artist: $title </li>
                  <li>Genre: $description </li>
                  <li>Genre: $link </li>
                  <li>Album: $album </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
