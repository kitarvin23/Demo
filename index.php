
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
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $item = $data->getElementsByTagName("link")->item(0)->nodeValue;
     echo "<ul>
            <h2>ID:$id</h2>
              <ul>
                  <li>title: $title </li>
                  <li>description: $description </li>
                  <li>link: $link </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>

