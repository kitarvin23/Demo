
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://maja-act-1.herokuapp.com/majarss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("book");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
  
    echo "<li>$title
            <ul>
                <li>$author</li>
                <li>$description</li>
            </ul>
        </li>";
 
 }
?>
</ul>
