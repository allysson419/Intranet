<?php

        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '386412');
        define('DBNAME', 'celke');

       $conn = new PDO('mysql:host=' . HOST. ';dbname='. DBNAME.';', USER, PASS);