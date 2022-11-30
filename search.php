<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $db = new SQLite3('benscarstore.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    
    // Create a table.
    $db->query(
    'CREATE TABLE IF NOT EXISTS "users" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        "name" VARCHAR,
        "password" VARCHAR,
        "info" VARCHAR
      )'
    );
    // Create a table.
    $db->query(
        'CREATE TABLE IF NOT EXISTS "cars" (
            "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            "model" VARCHAR,
            "img-link" VARCHAR
            )'
        );
    
    // Insert some sample data to users table.
    $db->query('INSERT INTO "users" ("name") VALUES ("Crazy Uncle Ben")');
    $db->query('INSERT INTO "users" ("name") VALUES ("Walter W. Walter")');
    $db->query('INSERT INTO "users" ("name") VALUES ("Flag")');
    $db->query('INSERT INTO "users" ("info") VALUES ("CCCS{Flag-go-here}")');
    
    //Insert sample data to cars table.
    $db->query('INSERT INTO "cars" ("model") VALUES ("Pontiac Aztek")');
    $db->query('INSERT INTO "cars" ("img-link") VALUES ("./img/aztek.jpg")');
    $db->query('INSERT INTO "cars" ("model") VALUES ("Bugatti Chiron")');
    $db->query('INSERT INTO "cars" ("img-link") VALUES ("./img/chiron.jpg")');
    $db->query('INSERT INTO "cars" ("model") VALUES ("Smart ForTwo")');
    $db->query('INSERT INTO "cars" ("img-link") VALUES ("./img/fortwo.jpg")');
    $db->query('INSERT INTO "cars" ("model") VALUES ("Lamborghini Aventador")');
    $db->query('INSERT INTO "cars" ("img-link") VALUES ("./img/aventador_svj.jpg")');
        $query = $_REQUEST["q"];
        $result = $db->query('SELECT * FROM "cars" WHERE "model" LIKE "' . $query . '"');
        echo $result.toString();
    ?>
</body>
</html>