<?php
include("db.php");
 $id=$_POST['id'];
 $query="UPDATE tbl_contact SET name='$Name',email='$Email',phone='$Phone',
 gender='$Gender',address='$Address',detail='$Details' WHERE id='$id'";
 $mysqli->query($query);
?>