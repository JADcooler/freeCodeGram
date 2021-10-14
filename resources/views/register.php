<head>
<title>admin home</title>

</head>


<form action="/index" method="post">
  <!-- {{ csrf_field() }} -->
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>