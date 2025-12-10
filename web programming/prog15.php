<!DOCTYPE html>
<html>
<head>
<title>College Website</title>
</head>
<body>

<h1>Welcome to Our College</h1>

<nav>
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Courses</a>
  <a href="#">Contact</a>
</nav>

<h2>About Our College</h2>
<p>Brief description of our college.</p>

<h2>Available Courses</h2>
<ul>
<?php
foreach (['Computer Science','Engineering','Business','Arts','Science'] as $c)
  echo "<li>$c</li>";
?>
</ul>

<h2>Contact Information</h2>
<p>Address: 123 College Avenue</p>
<p>Email: info@college.com</p>
<p>Phone: 080-25634869</p>

<p>&copy; <?php echo date("Y"); ?> Our College</p>

</body>
</html>
