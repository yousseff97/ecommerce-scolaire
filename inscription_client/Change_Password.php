<?php
require "ConnectionDB.php";
$bd = ConnectionDB::getInstance();
session_start();
$id=$_SESSION['id'];
$Old_Password=$_POST["P_old"];
$New_Password=$_POST["P_new"];
$req="SELECT * FROM users WHERE id='$id'";
$res=$bd->query($req);
$res=$res->fetch(PDO::FETCH_BOTH);
if(($res['Password']==$Old_Password)&&($Old_Password!=$New_Password)) {
    $req1 = "UPDATE  users SET Password='$New_Password' WHERE id='$id'";
    $res1 = $bd->query($req1);
}
else {
    $_SESSION['NP'] = "";
}
header("location:../login/client.php");

?>