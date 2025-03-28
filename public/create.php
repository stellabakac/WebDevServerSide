<?php
if(isset($_POST['submit']) ){
    try{
        require_once '../src/DBconnect.php';
        require_once '../common.php';
        $new_user = array(
                "firstname" => escape($_POST['firstname']),
                "lastname" => escape($_POST['lastname']),
                "email" => escape($_POST['email']),
                "age" => escape($_POST['age']),
                "location" => escape($_POST['location'])
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users", implode(", ",array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
include 'templates/header.php';
if(isset($_POST['submit']) && $statement){
    echo  $new_user['firstname']." added successfully";
}
?>

<h2>Add a user</h2>
<form method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" required>
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" required>
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    <input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to home</a>
<?php include 'templates/footer.php'; ?>
