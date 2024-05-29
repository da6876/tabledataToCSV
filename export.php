<?php
if(isset($_POST["submit"])){
    include "connection.php";
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=data.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, array('id', 'first_name', 'email'));
      $query = "SELECT * FROM users";
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
}
?>