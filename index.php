<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Data exporting into excel in csv format</title>

  </head>
  <body>



  <div class="container ">
    <div class="row" >
        <div class="col-md-8 p-4 ">
           <div  class="table_outer">

              <?php
               $query3="SELECT*FROM users";
                $res3=mysqli_query($conn,$query3);
                $num=mysqli_num_rows($res3);

                echo "<h3 style='color:#0aad0a'>Hurrah!  Total Number of Animal is :  ".$num ."</h3>";

              ?>


					<form action="export.php" method="post">


					<input type="submit" name="submit"   value="Export to Excel" class="btn btn-danger my-3">

					</form>

                    <table class="table table-bordered">
                     <tr class="bg-primary text-white">
                        <td><strong> Sn. </strong> </td>
                        <td><strong> Common name. </strong> </td>
                        <td><strong> Scirntific name. </strong> </td>



                     </tr>
                    <?php

                    $qry = "SELECT * FROM users ORDER BY id ASC";
                    $result=mysqli_query($conn, $qry); //rs.open sql,con

                    while ($row=mysqli_fetch_assoc($result))
                    { ?>
                          <tr>
                              <td><strong> <?php echo $row['id']; ?> </strong> </td>
                              <td><?php echo $row['first_name']; ?> </td>
                              <td><?php echo $row['email']; ?> </td>
                          </tr>
                     <?php
                    }
                    ?>

                    </table>

           </div>
        </div>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">  </script >