<?php
/*
* Shorty - A simple URL shortener
* MIT License
* Made by @JMcrafter26 (fork of mikecao's version)
* (c) 2023 JM26.NET
*/

// Hostname for your URL shortener
$hostname = 'https://example.com/shorty';

// PDO connection to the database
$connection = new PDO('mysql:dbname=shorty;host=localhost', 'root', 'password');

// Create table if it doesn't exist
$connection->exec('CREATE TABLE IF NOT EXISTS `shorty_urls` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `url` varchar(1000) NOT NULL,
    `short` varchar(10) DEFAULT NULL,
    `created` datetime NOT NULL,
    `accessed` datetime DEFAULT NULL,
    `hits` int(10) UNSIGNED NOT NULL DEFAULT "0",
    PRIMARY KEY (`id`),
    UNIQUE KEY `url` (`url`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;');

// Choose your character set (default)
// $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

// The following are shuffled strings of the default character set.
// You can uncomment one of the lines below to use a pre-generated set,
// or you can generate your own using the PHP str_shuffle function.
// Using shuffled characters will ensure your generated URLs are unique
// to your installation and are harder to guess.

$chars = 'XPzSI6v5DqLuBtVWQARy2mfwkC14F8HUTOG0aJiYpNrl9Zxgbd3Khsno7jMeEc';
// $chars = 'PAC3mfIazxgF1lVK4wJ2WEHY0dcb87TrsZeBpL9vNUMGktROijnSoq5DX6yQhu';
// $chars = 'zFr7ALOJnGRxtKSs0oQT5NeZjdI1iX8DM2lHaCVyg4mUPp63BkEubc9qWfhwYv';
// $chars = 'u7oIws3pVWZMQjA4XhNtyvglkEer1C2J5YdT6zLiFm0ObPc8S9KaDHqRBnfUGx';
// $chars = 'gZ6hdO59XTJmUP31YMG7FvQyqjlKkf8zwitx0AcupDVs2RWCIBaNreob4nLHES';

// If you want your generated URLs to even harder to guess, you can set
// the salt value below to any non empty value. This is especially useful for
// encoding consecutive numbers.
$salt = 'Salt';

// The padding length to use when the salt value is configured above.
// The default value is 3.
$padding = 3;
?>
