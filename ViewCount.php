 <?php
 //First connect to the database
      mysqli_connect("localhost","user","password","database") or die(mysqli_connect_errorno());
    $als = "UPDATE views SET value = value+1 WHERE name = 'hits'"; //Update by 1 per page view

mysqli->query($als);
$tls = "SELECT value FROM views";
    $view = fetch_assoc(mysqli->query($tls));
  
  echo $view['value']; //display number of views
      ?>
      
  
