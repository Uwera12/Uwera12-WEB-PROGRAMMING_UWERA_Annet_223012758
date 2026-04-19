<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hotel_db');

function getDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function initDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    $conn->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
    $conn->select_db(DB_NAME);

    $conn->query("CREATE TABLE IF NOT EXISTS orders (
        id         INT AUTO_INCREMENT PRIMARY KEY,
        full_name  VARCHAR(150),
        email      VARCHAR(150),
        phone      VARCHAR(30),
        menu_item  VARCHAR(100),
        address    TEXT,
        date       DATE,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");

    $conn->query("CREATE TABLE IF NOT EXISTS contacts (
        id        INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(150),
        email     VARCHAR(150),
        phone     VARCHAR(30),
        location  VARCHAR(200),
        message   TEXT,
        sent_at   DATETIME DEFAULT CURRENT_TIMESTAMP
    )");

    $conn->query("CREATE TABLE IF NOT EXISTS admin_users (
        id       INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(80) UNIQUE,
        password VARCHAR(255)
    )");

    $hash = password_hash('admin11', PASSWORD_BCRYPT);
    $conn->query("INSERT IGNORE INTO admin_users (username, password) VALUES ('admin', '$hash')");

    $conn->close();
}

initDB();


function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}
