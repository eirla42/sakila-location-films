<?php

const env = 'WAMP'; // WAMP or DOCKER
const DB_NAME = 'sakila';
const DB_USER = 'root';

if (env == 'WAMP') {
    define("DB_HOST", 'localhost');
    define("DB_PWD", '');
} else {
    define("DB_HOST", '172.19.0.1');
    define("DB_PWD", 'root');
}
