CREATE TABLE IF NOT EXISTS "users" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "name" VARCHAR,
    "password" VARCHAR
);
CREATE TABLE IF NOT EXISTS "cars" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "model" VARCHAR,
    "img-link" VARCHAR
);
INSERT INTO "users" ("name", "password") VALUES ("Crazy Uncle Ben", "CRAZY-@$S_UNCLE!!");
INSERT INTO "users" ("name", "password") VALUES ("Walter W. Walter", "Pas$w0rd1!!");
INSERT INTO "users" ("name", "password") VALUES ("Walter W. Walter, jr.", "TheR1singSun@!");
INSERT INTO "users" ("name", "password") VALUES ("Flag", "CCCS{Flag-go-here}");

INSERT INTO "cars" ("model", "img-link") VALUES ("Pontiac Aztek", "./img/aztek.jpg");
INSERT INTO "cars" ("model", "img-link") VALUES ("Bugatti Chiron", "./img/chiron.jpg");
INSERT INTO "cars" ("model", "img-link") VALUES ("Smart ForTwo", "./img/fortwo.jpg");
INSERT INTO "cars" ("model", "img-link") VALUES ("Lamborghini Aventador", "./img/aventador_svj.jpg");