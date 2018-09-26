<?php 
$nama = $_POST['nama'] ;
$password = $_POST['password'];

$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 1234;

$data = array(
			array( 
				"nama" =>"Ridho" ,
				"password" =>"1234"),
			array(  
				"nama" =>"Fadil",
				"password"=>"4321"
				),
			array( 
				"nama" =>"Zahid",
				"password"=>"1122"),
		);
if ($nama == $data[1]["nama"] && $password == $data[1]['password']||
	$nama == $data[2]["nama"] && $password == $data[2]['password']||
	$nama == $data[0]["nama"] && $password == $data[0]['password']) {
	echo "<center><h1>Data Diri</h1></center>";
}else{
	header("location: Form.html");
}
 ?>
 <center>
  
  <b>
<form action="Tampilan.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  		<td>Genre Film :</td>
  		<td><input type="checkbox" name="genre[]" value="Horror">Horror<br></td>
  	</tr>
  	<tr>
  		<td></td>
  		<td colspan="2"><input type="checkbox" name="genre[]" value="Action">Action<br></td>
    </tr>
    <tr>
  		<td></td>
  		<td><input type="checkbox" name="genre[]" value="Anime">Anime</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="genre[]" value="Thrille">Thrille</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="genre[]" value="Animasi">Animasi</td>
    </tr>
    <tr>
    	<td>Wisata Liburan : </td>
    	<td><input type="checkbox" name="wisata[]" value="Bali">Bali</td>
    </tr>
    <tr>
    	<td></td>
    	<td><input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat</td>
    </tr>
    <tr>
    	<td></td>
    	<td><input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung</td>
    </tr>
     <tr>
      <td></td>
      <td><input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo</td>
    </tr>
</table>
<br>

<input type="submit" name="" value="kirim">
</form>
</center>