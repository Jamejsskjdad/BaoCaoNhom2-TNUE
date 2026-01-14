<?php
require_once('mysql_connect.php');

$query = "DELETE FROM `user` WHERE `userName` = 'ndt'";
$result = mysqli_query($conn, $query);

$affectrows = 0;
if ($result) {
    $affectrows = mysqli_affected_rows($conn);
}
echo "Có $affectrows bản ghi đã bị xóa";

mysqli_close($conn);
?>
