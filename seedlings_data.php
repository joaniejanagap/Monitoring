<?php
// same with the admin
require_once 'config.php';
require_once 'admin_add-seedling.php';


/**
 * Trick use user_type 
 */

if($_SESSION['user_type'] =="employee"){
  include ('includes/header-employee.php');
  include ('includes/nav-employee.php');
}
else if($_SESSION['user_type'] == "admin"){
  include ('includes/header.php');
  include ('includes/nav.php');
}


?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/management.css">
<link rel="stylesheet" href="css/add_employee.css">
<link rel="stylesheet" href="css/custom.css">

<link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


<head>
  <title>Admin Page</title>
</head>

<body>
  <h3 id="h3-employee">Seedlings Monitoring</h3>

  <div class="divOne">
    <label for="status"></label>
    <select id="status" style="width: 10%;">
      <option value="Select Status">Select Status</option>
      <option value="all">All records</option>
      <option value="received">Received</option>
      <option value="released">Released</option>
    </select>

    <label for="month"></label>
    <select id="month" style="width: 10%;">
      <option value="Select Month">Select Month</option>
      <option value="all">All records</option>
      <option value="received">January</option>
      <option value="released">February</option>
      <option value="received">March</option>
      <option value="released">April</option>
      <option value="received">May</option>
      <option value="released">June</option>
      <option value="received">July</option>
      <option value="released">August</option>
      <option value="received">September</option>
      <option value="released">October</option>
      <option value="released">November</option>
      <option value="released">December</option>
    </select>

    <label for="year"></label>
    <select id="year" style="width: 10%;">
      <option value="Select Year">Select Year</option>
      <option value="all">All records</option>
      <option value="received">2022</option>
      <option value="released">2021</option>
      <option value="received">2020</option>
      <option value="released">2019</option>
      <option value="received">2018</option>
      <option value="released">2017</option>
      <option value="received">2016</option>
      <option value="released">2015</option>
      <option value="received">2014</option>
      <option value="released">2014</option>
      <option value="released">2012</option>
      <option value="released">2011</option>
    </select>
  </div>

  <table class=" content-table">
    <thead>
      <th>Request ID</th>
      <th>Date and Time</th>
      <th>Organization Name</th>
      <th>Specie Name</th>
      <th>No. of seedlings requested</th>
      <th>Area of Location</th>
      <th>PENRO-Records</th>
      <th>PENRO-HO</th>
      <th>CENRO-Records</th>
      <th>CENRO-CDS</th>
    </thead>

    <tbody>
      <?php
      $status = 1;
      $sql = "SELECT * FROM seed_data WHERE status=".$status.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      // if( $resultCheck > 0){
      //   while($row = mysqli_fetch_assoc($result)){
      //     $id = $row["seed_id"];
      //     $species = $row["species"];
      //     $name = $row["name"];
      //     $availability = $row['availability'];
      //     $date_to_be_planted = $row["date_to_be_planted"];



  
          echo '<tr> 
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>';
          
      //   }
      //   $result->free();
      // }
?>

</tbody>
  </table>
