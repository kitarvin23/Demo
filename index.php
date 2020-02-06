//index.php//github
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("book");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $album = $data->getElementsByTagName("album")->item(0)->nodeValue;
  
    echo "
            <li>$title
            <ul>
                <li>$link</li>
                <li>$description</li>
                <li>$album</li>
            </ul>
            </li>
         ";
 
 }
?>
</ul>
