<?php
$conn = new \PDO("mysql:host=localhost;dbname=perefershop;", "rodion", "q1qqq", array(
    PDO::MYSQL_ATTR_LOCAL_INFILE => true,
));
$conn->query("SET GLOBAL local_infile=1");
$conn->query("LOAD DATA LOCAL INFILE 'audper.txt' INTO TABLE audioperef FIELDS TERMINATED BY ';'");
$conn->query("LOAD DATA LOCAL INFILE 'personal.txt' INTO TABLE personal FIELDS TERMINATED BY ','");
$conn->query("LOAD DATA LOCAL INFILE 'othper.txt' INTO TABLE otherperef FIELDS TERMINATED BY ';'");
$conn->query("LOAD DATA LOCAL INFILE 'vidper.txt' INTO TABLE videoperef FIELDS TERMINATED BY ';'");
$conn->query("LOAD DATA LOCAL INFILE 'brand.txt' INTO TABLE btands FIELDS TERMINATED BY ','");
$conn->query("LOAD DATA LOCAL INFILE 'products.txt' INTO TABLE products FIELDS TERMINATED BY ';'");
echo "Данные записанны";
?>
