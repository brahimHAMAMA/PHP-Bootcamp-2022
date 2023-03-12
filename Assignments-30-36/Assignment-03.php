<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    echo "The Request Method Is Post And Username Is $user <br>";
    if (in_array($user, $admins)) {
        echo "This Username $user Is Admin";
    }
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="Send">
</form>