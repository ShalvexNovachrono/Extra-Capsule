<?php

try {
    $db = new PDO('sqlite:db.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $res = $db->exec(
        "CREATE TABLE IF NOT EXISTS `extraCapsule` (
        userID TEXT NOT NULL,
        extraCapsuleID TEXT NOT NULL,
        indexNumber INT NOT NULL,
        extraCapsuleData TEXT NOT NULL,
        extraCapsuleDateTime TEXT NOT NULL,
        extraCapsuleUpdateDateTime TEXT NOT NULL
        )"
    );

    $res = $db->exec(
        "CREATE TABLE IF NOT EXISTS `users` (
        userID TEXT NOT NULL
        )"
    );

    if ($res !== false) {
        echo "Table 'extraCapsule' created successfully.\n";
    } else {
        echo "An error occurred while creating the table.\n";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
