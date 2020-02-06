<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kitarvin23.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("gadget");
?>

 <h1>Gadgets</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $brand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
     $cost = $data->getElementsByTagName("cost")->item(0)->nodeValue;
     $year = $data->getElementsByTagName("year")->item(0)->nodeValue;
     $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
 
 echo "<ul>
            <h2>$bramd</h2>
              <ul>
                  <li>Artist: $cost </li>
                  <li>Genre: $year </li>
                  <li>Album: $color </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
