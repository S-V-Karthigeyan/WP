<?php
$colors = [
  'Sunday' => '#ffcccb',
  'Monday' => '#ffebcd',
  'Tuesday' => '#add8e6',
  'Wednesday' => '#98fb98',
  'Thursday' => '#f0e68c',
  'Friday' => '#dda0dd',
  'Saturday' => '#c0c0c0'
];

$day = date('l');
$bg = $colors[$day] ?? '#ffffff';
?>
<!DOCTYPE html>
<html>
<head>
<title>Background Color</title>
<style>
  body { background-color: <?= $bg ?>; }
</style>
</head>
<body>

<h1>Today is <?= $day ?></h1>

</body>
</html>
