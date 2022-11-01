<html>
    <!-- This is a project mainly focused on using the supergloblas $get $request $post. -->
<body>
<h3>Addition</h3>
<link rel="stylesheet" href="styles.css">
<form method="get" action="addition.php"><br>
First Number: <input type="text" name="add_first"><br>
Second Number: <input type="text" name="add_second"><br>

<button class = "button" type="submit">Add</button>
</form>

<h3>Division</h3>
<form method="get" action="division.php">
Numerator:<input type="text" name="div_num"><br>
Denominator:<input type="text" name="div_den"><br>
<button class = "button" type="submit">Add</button><br>
</form>
<a href="index.php">Reset</a>
</body>
</html>