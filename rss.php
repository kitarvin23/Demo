<?php 

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820771") or die (mysqli_error($connect));
$sql = "SELECT * FROM rss_info";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
  
    echo "{<li>$title
            <ul>
                <li>$link</li>
            </ul>
        </li>}";
 
 }
?>
</ul>

