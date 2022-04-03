<?php
    switch($_POST['functionname']){
        case 'arrayR':
            arrayRetrieve();
            break;
    }
    function arrayRetrieve() {
        $arr = array();
        $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");

        $query = pg_query($conn, "SELECT * FROM advertisement");

            while($row = pg_fetch_assoc($query))
            {
                $addArr = array($row['name'] , $row['price'], $row['condition'],$row['category'], $row['description'], $row['location'],$row['contactinfo']);
                $arr[] = $addArr;
            }
            echo json_encode($arr);
    }
?>