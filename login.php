<?php
$mysqli = new mysqli("localhost","root","","atelier_session");
 
// verification of connection
if ($mysqli -> connect_errno) {
  echo "connection failure: " . $mysqli -> connect_error;
  exit();
}
//data recovery
$login = $_POST["login"];
$pass = $_POST["pass"];
 
// Running a query
$sql = "SELECT nom FROM `user` 
        WHERE `login`='$login' AND `pass`='$pass'";
 

$result = $mysqli -> query($sql);
if($result -> num_rows>=1){
    //start session
    session_start();
    //memorizing the variables of the session
    //when a person connects
    $_SESSION["time"]= time();
    //the nom of the person that enters  
    $row = $result -> fetch_array(MYSQLI_ASSOC);
    $_SESSION["nom"]= $row["nom"];
    echo "Connection successfull";
    //free results
    $result -> free_result();

?>
    <a href="menu.php">Go to menu</a>
<?php
    } else {
        echo "Connection error";
        header('location:auth.php?msg=Error');
    }
    //disconnection
    $mysqli -> close();
?>