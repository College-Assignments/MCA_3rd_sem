<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="padding: 1rem">
  <form method="post">
    Enter a Number: <input type="text" name="input" class="form-control" style="max-width: 300px;"><br>
    <button type="submit" name="submit" class="btn btn-primary" style="width: 300px;">Submit</button>
  </form>
  <?php
  if ($_POST) {
    $input = $_POST['input'];
    for ($i = 2; $i <= $input - 1; $i++) {
      if ($input % $i == 0) {
        $value = True;
      }
    }
    if (isset($value) && $value) {
      echo '<br /><br /> The Number ' . $input . ' is not prime!';
    } else {
      echo '<br /><br /> The Number ' . $input . ' is prime!';
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>