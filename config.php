<?php
    /**
     * Execute SQL file to configure DB (creating tables and inserting data).
     * Execute other configuration
     */
    include_once "pdo/base-pdo.php";

    try {
        $db = new BasePdo();
        $sql = file_get_contents("data/init.sql");
        $db->connect()->exec($sql);
    } catch(PDOException $error) {
        $message = $error->getMessage();
        echo "SQL:\n$sql\n\nError: $message";
    }

    mkdir("./uploads");

    echo "Configuration successfully";
?>