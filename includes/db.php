
<?php session_start(); 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PWD', '');
    define('DBNAME', 'portfolio');

    try {
        $db = new PDO("mysql:host=". HOST .";dbname=". DBNAME, USER, PWD, [
            // Gestion des erreurs PHP/SQL
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            // Gestion du jeu de caractères
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            // Choix du retours des résultats
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        // echo 'Base de données connectée';

    } catch (Exception $error) {
        echo 'Exception error : '. "<br>". $error->getMessage();
    }

    $fetch = "SELECT * FROM projects" ;
    $pdo = new PDO("mysql:dbname=portfolio; host=localhost","root", "");
    $temp = $pdo->prepare($fetch);
    $temp->execute();
    $projects = $temp->fetchAll(PDO::FETCH_ASSOC);

    $fetch = "SELECT * from icons as i INNER JOIN project_icons as j ON i.id_icons=j.id_icons;" ;
    $pdo = new PDO("mysql:dbname=portfolio; host=localhost","root", "");
    $temp = $pdo->prepare($fetch);
    $temp->execute();
    $icons = $temp->fetchAll(PDO::FETCH_ASSOC);
    
    
    ?>