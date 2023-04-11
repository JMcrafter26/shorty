<?php
/*
* Shorty - A simple URL shortener
* MIT License
* Made by @JMcrafter26 (fork of mikecao's version)
* (c) 2023 JM26.NET
*/

require './shorty.php';
require './config.php';

$shorty = new Shorty($hostname, $connection);


$shorty->set_chars($chars);
$shorty->set_salt($salt);
$shorty->set_padding($padding);

$shorty->run();
