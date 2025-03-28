<?php require 'config.php';
/** DB setup
 * a try/catch block will be used incase something goes wrong
 * $connection makes the connection using PHP Data Object, in order to execute SQL queries
 * $sql gets the contents of the file in this case init.sql
 * connection then executes the sql query
 * a message will then appear and say "Database created successfully"
 * if otherwise the exception will print to screen
 * */

try {
    $connection = new PDO($dsn, $username, $password, $options);
    $sql = file_get_contents('data/init.sql');
    $connection->exec($sql);
    echo "Database created successfully";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
