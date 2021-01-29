<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "dbhotel";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
 if ($conn && $conn->connect_error) {
   echo "Connection failed: " . $conn->connect_error;
 } else {

   $query = "SELECT `stanze`.`room_number`, `stanze`.`beds`, `configurazioni`.`title` FROM `prenotazioni` INNER JOIN `stanze` ON `stanze`.`id` = `prenotazioni`.`id` INNER JOIN `configurazioni` ON `configurazioni`.`id` = `prenotazioni`.`configurazione_id`";
   // $query = "SELECT * FROM stanze";
   $result = $conn->query($query);
   // var_dump($result);

   if(!$result) {
     echo "Query non corretta!";
   } elseif($result->num_rows == 0) {
     echo "La query ha restituito 0 risultati";
   } else {
     $database = [];
     // echo "Ok, cominciamo a capire come recuperare i risultati";
     while($row = $result->fetch_assoc()){
       // var_dump($row);
       // echo "<br>La stanza numero ".$row["room_number"]." ha ".$row["beds"]." letti";
       $database[] = $row;
     }
     // var_dump($database);
   }

 }


 ?>
