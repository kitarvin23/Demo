<?php 
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820522");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_gadget ORDER BY mus_id DESC LIMIT 20";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){

        $brand = $r['brand'];
        $cost = $r['cost'];
        $year = $r['year'];
        $color = $r['color'];

        echo "<track>
        <title>$brand</title>
        <genre>$cost</genre>
        <artist>$year</artist>
        <album>$color</album>
        </track>";
    }
    echo "</channel></rss>";
?>



