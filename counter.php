<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Measurement Converter</title>
  <link rel="stylesheet" href="counter.css">
</head>
<body>
  <h1>Measurement Converter</h1>

  <div class="section">
    <h2>Temperature (°C)</h2>
    <form method="POST">
      <label>Enter Celsius:
        <input type="number" step="0.1" name="celsius">
      </label>
      <button type="submit" name="temp">Convert</button>
    </form>

    <?php
    if (isset($_POST['temp'])) {
      $c = floatval($_POST['celsius']);
      $f = $c * 9/5 + 32;
      $k = $c + 273.15;
      echo "<p>$c °C = $f °F</p>";
      echo "<p>$c °C = $k K</p>";
    }
    ?>
  </div>

  <div class="section">
    <h2>Speed (km/h)</h2>
    <form method="POST">
      <label>Enter km/h:
        <input type="number" step="0.1" name="kmph">
      </label>
      <button type="submit" name="speed">Convert</button>
    </form>

    <?php
    if (isset($_POST['speed'])) {
      $kmph = floatval($_POST['kmph']);
      $mps = $kmph / 3.6;
      $knots = $kmph * 0.539957;
      echo "<p>$kmph km/h = $mps m/s</p>";
      echo "<p>$kmph km/h = $knots knots</p>";
    }
    ?>
  </div>

  <div class="section">
    <h2>Mass</h2>
    <form method="POST">
      <label>Enter kilograms:
        <input type="number" step="0.1" name="kg">
      </label>
      <label>Enter grams:
        <input type="number" step="1" name="g">
      </label>
      <button type="submit" name="mass">Convert</button>
    </form>

    <?php
    if (isset($_POST['mass'])) {
      if ($_POST['kg'] !== "") {
        $kg = floatval($_POST['kg']);
        $g = $kg * 1000;
        echo "<p>$kg kg = $g g</p>";
      }
      if ($_POST['g'] !== "") {
        $g = floatval($_POST['g']);
        $kg = $g / 1000;
        echo "<p>$g g = $kg kg</p>";
      }
    }
    ?>
  </div>

</body>
</html>