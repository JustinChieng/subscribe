<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=localhost;dbname=subscribe', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'root' // instruction: change this to your database password
    );
}