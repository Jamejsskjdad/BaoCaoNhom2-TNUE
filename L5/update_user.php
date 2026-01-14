<?php
require_once('mysql_connect.php');

$query = "UPDATE `user`
          SET `fullName` = 'Robinson Crusso', `age` = 36
          WHERE `userName` = 'admin'";

$result = mysqli_query($conn, $query);

$affectrows = 0;
if ($result) {
    $affectrows = mysqli_affected_rows($conn);
}
echo "Có $affectrows bản ghi đã được update";

mysqli_close($conn);
?>
