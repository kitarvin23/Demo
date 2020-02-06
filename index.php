
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
     $id = $data->getElementsByTagName("id")->item(0)->nodeValue;
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $item = $data->getElementsByTagName("link")->item(0)->nodeValue;
     echo "<ul>
            <h2>$id</h2>
              <ul>
                  <li>Artist: $title </li>
                  <li>Genre: $description </li>
                  <li>Album: $link </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>

