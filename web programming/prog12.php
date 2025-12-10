<?php
$users = [
  ['id'=>1,'name'=>'anjali','age'=>20,'email'=>'anjali@example.com'],
  ['id'=>2,'name'=>'neena','age'=>19,'email'=>'neena@example.com'],
  ['id'=>3,'name'=>'madhu','age'=>22,'email'=>'madhu@example.com'],
];

echo "Search results for age=19:<br>";

foreach ($users as $u) {
  if ($u['age'] == 19) {
    echo "ID: {$u['id']}, Name: {$u['name']}, Email: {$u['email']}<br>";
  }
}
?>
