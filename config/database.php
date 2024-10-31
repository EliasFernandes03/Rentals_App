<?php

$db = new PDO('mysql:host=mysql_container;dbname=rentals_db', 'root', 'root_password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
