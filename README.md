# Shorty :link:

<a href="https://github.com/jmcrafter26/shorty/releases/latest"><img src="https://api.jm26.net/badge/beta?url=https://img.shields.io/github/release/jmcrafter26/shorty.json&format=cap-l" height="20px" alt="Latest Release" style="display: inline-block; vertical-align: middle;"></a> <a href="https://github.com/JMcrafter26/shorty/blob/master/LICENSE"><img src="https://api.jm26.net/badge/beta?url=https://img.shields.io/github/license/jmcrafter26/shorty.json&format=cap-l" height="20px" alt="License" style="display: inline-block; vertical-align: middle;"></a> <img src="https://api.jm26.net/badge?g&label=It's%20even&message=~USEFUL~&color=pink" height="20px" alt="It's even ~USEFUL~" style="display: inline-block; vertical-align: middle;">

Shorty is a simple URL shortener for PHP, now with a simple interface.

## Features

* Fast and lightweight :rocket:
* Very easy to install :package:
* Simple interface :sparkles:
* Highly customizable :wrench:
* RESTful API :computer:
* Whitelist support :lock:
* Bot protection :robot:


<div>Table of contents: <a href="#installation">Installation</a> | <a href="#generating-short-urls">Generating short URLs</a> | <a href="#api">API</a> | <a href="#whitelist">Whitelist</a> | <a href="#requirements">Requirements</a> | <a href="#license">License</a> | <a href="#stats">Stats</a></div>

## Installation

1\. [Download](https://github.com/JMcrafter26/shorty/releases/latest) and extract the files to your web directory.

2\. Add a rewrite rule to your server:

For **Apache**, edit your `.htaccess` file with the following:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?q=$1 [QSA,L]

For **Nginx**, add the following to your server declaration:

    server {
        location / {
            rewrite ^/(.*)$ /index.php?q=$1;
        }
    }

3\. Configure your Database credentials and other settings in the `config.php` file

4\. To use the recaptcha, you need to get a site key and secret key from [here](https://www.google.com/recaptcha/admin/create) and replace the *xxxxxxxx* in the recaptcha div `<div class="g-recaptcha" data-sitekey="xxxxxxxxxx" data-callback="verifyCaptcha"></div>` in `shorten.html` with your site key.

## Generating short URLs

Simply head to your Shorty installation from your browser and navigate to `/shorten.html` for the simple interface.

## API

To generate a short URL, simply pass in a `url` query parameter to your Shorty installation:

    http://example.com/?url=http://www.google.com

This will return a shortened URL such as:

    http://example.com/9xq

When a user opens the short URL they will be redirected to the long URL location.

By default, Shorty will generate an HTML response for all saved URLs.
You can alter the response format by passing in a `format` query parameter.

    http://example.com/?url=http://www.google.com&format=text

The possible formats are `html`, `xml`, `text`, and `json`.

## Whitelist

By default anyone is allowed to enter a new URL for shortening. To restrict the saving of URLs to certain IP addresses, use the `allow` function:

    $shorty->allow('192.168.0.10');

## Requirements

* PHP 5.1+
* PDO extension
* MySQL or SQLite database

## License

Shorty is licensed under the [MIT](https://github.com/mikecao/shorty/blob/master/LICENSE) license.

## Stats

<a href="https://github.com/JMcrafter26/shorty/stargazers" target="_blank"><img src="https://api.jm26.net/badge/beta?url=https://shields.io/github/stars/jmcrafter26/shorty.json&color=FFDB2D&label=Stars" height="20px" alt="Stars " style="display: inline-block; vertical-align: middle;"></a>
<a href="https://github.com/JMcrafter26/shorty/graphs/contributors" target="_blank"><img src="https://api.jm26.net/badge/beta?url=https://img.shields.io/github/contributors/jmcrafter26/shorty.json&color=blue&format=cap" height="20px" style="display: inline-block; vertical-align: middle;"></a>
<img src="https://api.jm26.net/badge/beta.php?url=https://api.countapi.xyz/hit/jmcrafter26/shorty.json&label=Repo%20visits&color=green" height="20px" alt="Get these COOL BADGES" style="display: inline-block; vertical-align: middle;">
<a href="https://github.com/JMcrafter26/php-badges" target="_blank"><img src="https://api.jm26.net/badge/beta?g&label=Get%20these&icon=f41b&message=COOL%20BADGES&color=de4ff4" height="20px" alt="Get these COOL BADGES" style="display: inline-block; vertical-align: middle;"></a>

Made by a [HUMAN 😵](https://github.com/JMcrafter26)
