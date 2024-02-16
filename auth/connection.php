<?php
$user = "root";
$pass = "";

// try {
//     $dbn = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
//     foreach ($dbn->query('SELECT * from wp_posts') as $row) {
//         print_r($row);
//     }
//     $dbn = null;
// } catch (PDOException $e) { 
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }



// try {
//     $dbn = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
//     array(PDO::ATTR_PERSISTENT => true);
//     echo "Connection \n";

// } catch (Exception $e) {
//     die("Failed connection" . $e->getMessage());
// }




if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Текст, отправляемый в том случае,
    если пользователь нажал кнопку Cancel';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
}
?>
