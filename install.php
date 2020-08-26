<?php
    /**
     * Execute SQL file to create tables.
     */
    include_once("pdo/db.php");

    try {
        $db = new DB();
        $sql = file_get_contents("data/init.sql");
        $db->connect()->exec($sql);
        
        echo "Tables created successfully";
    } catch(PDOException $error) {
        $message = $error->getMessage();
        echo "sql:\n$sql\n\nerror: $message";
    }
?>