<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input PHP</title>
</head>

<body>
  <h2>Form Input PHP</h2>
  <form method="post" action="html_safe.php">
    <label for="input">Input: </label>
    <input type="text" name="input" id="input" required><br><br>
    <label for="email">Email : </label>
    <input type="text" name="email" id="email" required><br><br>
    <input type="submit"  value="Submit">
  </form>
</body>

</html>