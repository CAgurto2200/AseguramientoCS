
<?php
 $server = "mysql";
 $user = "root";
$password = "pass";
$database = "site-web2";
$conn = mysqli_connect($server, $user, $password, $database);
 if(!$conn){
 die("Connection failed: " . mysqli_connect_error());
 }else{
 echo 'conexión exitosa';
 }
$query = "SELECT
Usuario.Usuario_nombre as nombre,
Usuario.Email as email,
Info.fecha_nacimiento as fecha_nacimiento,
skills.skills_nombre as skill
FROM
Usuario
INNER JOIN
Info CN Usuario.Id = info.id_Usuario
INNER JOIN
Usuario_Skills CN Usuario.Id = Usuario_Skills.id_Usuario
INNER JOIN
Usuario_Skills CN Usuario.Id = Usuario_Skills.id_Skill
ORDER BY Usuario ;";
$result = mysqli_query($conn, $query);
var_dump(mysqli_fetch_all($result));
 mysqli_close($conn);
?>