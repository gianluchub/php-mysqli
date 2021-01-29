<?php
  include __DIR__ . "/database.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Stanze hotel</title>
   </head>
   <body>
     <table class="table">
        <thead>
          <tr>
            <?php
              $room1 = $database[0];
              $keys = array_keys($room1);
              foreach($keys as $key) {
            ?>
              <td><?php echo $key; ?></td>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach($database as $room) { ?>
            <tr>
              <?php foreach($room as $key => $value) { ?>
                <td><?php echo $value; ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
        </tbody>
     </table>
   </body>
 </html>
