
<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = Gizmo";
   $credentials = "user = postgres password=Gizmogizmo";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
