<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbname';


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['emotion']) && isset($_POST['image'])) {
  $emotion = $_POST['emotion'];
  $image = $_POST['image']
}

  $sql = "INSERT INTO slideshow_data (emotion, image) VALUES ('$emotion', '$image')"

  mysqli_query()

if (mysqli_affected_rows($conn) > 0) {
  echo 'Los datos han sido insertados';
 else {
  echo 'Ha ocurrido un error';
}
}

$sql = "SELECT * FROM slideshow_data";
$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr><th>Emoción</th><th>Imagen</th></tr>"

while($row = mysqli_fetch_assoc($result)) {
  echo '<tr><td>' . $row['emotion'] . "</td><td>" . $row['image'] . "</td></tr>";
}
  echo '</table>';

    mysqli_close($conn);


?>