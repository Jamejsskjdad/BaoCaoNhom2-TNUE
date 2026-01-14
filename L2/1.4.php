<?php
$hoso = array(
  "Họ và tên" => "Nguyễn Văn A",
  "Giới tính" => "Nam",
  "Ngày sinh" => array(
    "day" => 2,
    "month" => 9,
    "year" => 2010
  )
);

foreach ($hoso as $key => $value) {
  if (!is_array($value)) {
    echo $key . ": " . $value . "<br>";
  } else {
    $date = "";
    foreach ($value as $v) {
      $date .= $v . "/";
    }
    echo $key . ": " . rtrim($date, "/") . "<br>";
  }
}
?>