  <?php

  include_once "connection.php";
  ?>


<!DOCTYPE html>

<html>
<head>
<title> </title>
</head>
<body>



<?php

// created a template 
$sql = " SELECT  * FROM users WHERE user_uid= ?;";
// create a prepared statement

$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo"SQL statement failed";

}else{

  //Bind parameters to the placeholder

  mysqli_stmt_bind_param($stmt, "s", $data,);
// Run parameters inside database
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);


while ($row = mysqli_fetch_assoc($result)){
  echo $row['user_uid'] . "<br>";
}
}




?>




<form action="sign up.php" method="POST">
  <input type="text"  name="first" placeholder = "FirstName">
  <br>
  <input type="text"  name="last" placeholder = "LastName">
  <br>
  <input type="text"  name="email" placeholder = "E-mail">
  <br>
  <input type="text"  name="uid" placeholder = "Username">
  <br>
  <input type="text"  name="pwd" placeholder = "password">
   
  <br>
  <button type="submit" name="submit"> Sign Up</button>
  

</form>

</body>
</html>