<?php
setcookie("user", "An", time() + 3600);
?>
<?php
if (empty($_COOKIE["user"])) {
    setcookie("user", "An", time() + 3600);
} else {
    echo $_COOKIE["user"];
}
print_r($_COOKIE);
?>

<?php
setcookie("user", "An", time() - 3600);
?>