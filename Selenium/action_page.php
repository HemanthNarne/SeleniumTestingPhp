<!DOCTYPE html>
<html>
<body>
<h1>This is a small app to do simple addition</h1>
<form action="next.php" method="post">
<br><br>

Name: <input type="text" name="Name"><br><br>

quantity1: <input type="text" name="Num1"><br><br>

quantity2: <input type="text" name="Num2"><br>

<h2>Gender</h2>
<input type="radio" name="gender" value="male" checked> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other
<br>

<h2>Hobby</h2>
<input type="checkbox" name="value[]" value="Books" checked> Books<br>
<input type="checkbox" name="value[]" value="Video Games"> Video Games<br>
<input type="checkbox" name="value[]" value="Movies"> Movies<br><br>
<input type="submit">
</form>

</body>
</html>


