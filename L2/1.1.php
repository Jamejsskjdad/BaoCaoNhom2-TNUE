<?php
$student = array(
  "name" => "Nguyễn Văn A",
  "birthDate" => array(
    "day" => 2,
    "month" => 9,
    "year" => 2010
  )
);

echo $student["birthDate"]["day"];   // 2
echo $student["birthDate"]["month"]; // 9
echo $student["birthDate"]["year"];  // 2010
?>