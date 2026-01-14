<form method="post">
    <input type="text" name="name" placeholder="Tên">
    <input type="number" name="age" placeholder="Tuổi">
    <button>Gửi</button>
</form>

<?php
echo "Tên: " . $_POST['name'] . "<br>";
echo "Tuổi: " . $_POST['age'];
