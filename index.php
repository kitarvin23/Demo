
<?php
 $domOBJ = new DOMDocument();
$domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
  
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $id = $data->getElementsByTagName("id")->item(0)->nodeValue;
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;

   echo "
            <li>$title
            <ul>
                  <li>$id</li>
                <li>$link</li>
                <li>$description</li>
            </ul>
            </li>
         ";
 
 
 }
?>
</ul>
