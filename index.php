
<?php
 $domOBJ = new DOMDocument();
$domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
  
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;

echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>link: $link </li>
              </ul>
          </ul>";
 
 }
?>
</ul>
