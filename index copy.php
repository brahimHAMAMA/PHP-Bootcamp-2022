<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = 1002;
    $_SESSION['lastname'] = 'HAMAMA';
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_SESSION['name'])) {
    echo "Welcome " . $_SESSION['name'];
} else {
?>
<form action="" method="POST">
    <input type="text" name="username">
    <input type="submit" value="LogIn">
</form>
<?php } 

?>
<br>
<a href="logout.php">Logout</a>