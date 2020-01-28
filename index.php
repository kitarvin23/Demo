<?php
// Create connection
$con = mysqli_connect("localhost","id12382478_kitarvin23","123456","id12382478_rss");	

// Check connection
 if (mysqli_connect_errno($con)) {
 echo "Database connection failed!: " . mysqli_connect_error();
 }
 
 $sql = "SELECT * FROM rss_info ORDER BY id DESC LIMIT 20";

 $query = mysqli_query($con,$sql);
 
 header( "Content-type:");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title></title>
 <link></link>
 <language>en-us</language>";
 
 while($row = mysqli_fetch_array($query)){
   $title=$row["title"];
   $link=$row["link"];
   $link=$row["description"];
 
   echo "<item>
   <title>$title</title>
   <link>$link</link>
   <link>$description</link>
   </item>";
 }
 echo "</channel></rss>";
?>