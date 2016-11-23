<?php
    $friend_name = $_GET["recipient"];
    $my_name = $_GET["sender"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand|Sue+Ellen+Francisco" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <h1>Happy Thanksgiving!</h1>
    <div class="row">
      <div class="col-md-6">
        <img class="img-responsive img-rounded" src="thanksgiving.jpeg" alt="Thanksgiving Dinner">
      </div>
      <div class="col-md-6">
        <p>Dear <?php echo $friend_name; ?>,</p>
        <br>
        <p>When the Halloween pumpkins are gone,</p>
        <p>And the leaves have all fallen to ground,</p>
        <p>When the air has turned windy and cold,</p>
        <p>Then Thanksgiving will soon be around.</p>
        <br>
        <p>Thoughts of loved ones all feasting together,</p>
        <p>Pleasant pictures from past times appear</p>
        <p>To dwell in each heart and each mind--</p>
        <p>Then Thanksgiving is finally here!</p>
        <br>
        <p>The kitchen has scrumptious aromas,</p>
        <p>The dining room looks oh, so fine,</p>
        <p>Decorations with pilgrims and turkeys,</p>
        <p>And now we are ready to dine!</p>
        <br>
        <p>First the napkins are placed on our laps;</p>
        <p>Now the prayer for the meal to be blessed,</p>
        <p>Then we stuff the good food in our tummies,</p>
        <p>And we hope for it all to digest!</p>
        <br>
        <p>Cheers,</p>
        <p><?php echo $my_name; ?></p>
      </div>
    </div>
  </div>
</body>
</html>
