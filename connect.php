<?
$host = "localhost"; /* Host name */
$user = "id8776684_studentdetail"; /* User */
$password = "QLa%5~eI](d]P}QK"; /* Password */
$dbname = "id8776684_student"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

echo "Success"

?>