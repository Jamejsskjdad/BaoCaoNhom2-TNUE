<form method="get">
    <input type="text" name="name" placeholder="Tên">
    <input type="number" name="age" placeholder="Tuổi">
    <button>Gửi</button>
</form>

<?php
echo "Tên: {$_GET['name']}<br>";
echo "Tuổi: {$_GET['age']}";
