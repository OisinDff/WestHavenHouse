<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home Page</title>
</head>

<body>
  <?php require "layout/header.php"; ?>

  <h1 class="recRoomHeader">Recommended Room</h1>

  <?php require "functions/functions.php"; ?>

  <div class="recommendedContainer">
    <div>
      <?php
      $rooms = getRooms();
      $randomRoom = $rooms[array_rand($rooms)];
      ?>

      <img class="recommendedRoom" src="./images/<?php echo $randomRoom['image']; ?>" alt="Recommended Room">
      <h1 class="roomText"><?php echo $randomRoom['name']; ?></h1>
      <p class="roomDescription"><?php echo $randomRoom['description']; ?></p>
    </div>
  </div>

  <hr>

  <div class="flexContainer">

    <?php displayRooms($rooms); ?>

  </div>
  </div>
</body>
<?php require "layout/footer.php"; ?>

</html>