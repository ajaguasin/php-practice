<?php
include __DIR__ . '/partials/header.php';
require 'functions/movies.php';

if (!isset($_POST['id'])) {
    include __DIR__ . '/partials/notfound.php';
    exit;
}
$movieId = $_POST['id'];

$movie = deleteMovie($movieId);
if (!$movie) {
    include __DIR__ . '/partials/notfound.php';
    exit;
}
