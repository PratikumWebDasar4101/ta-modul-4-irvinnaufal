<?php
$genre = $_POST["genre"];
echo "<p>Genre yang Anda pilih:</p>";
foreach ($genre as $nilai) {
echo "- $nilai <br />";
}

$wisata = $_POST["wisata"];
echo "<p>Wisata yang Anda pilih</p>";
foreach ($wisata as $nilai) {
echo "- $nilai <br />";
}
?>
<br>
<a href="Login.html">Logout</a>