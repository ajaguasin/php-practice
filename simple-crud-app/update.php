<?php
include __DIR__ . '/partials/header.php';
require 'functions/movies.php';

if (!isset($_GET['id'])) {
    include __DIR__ . '/partials/notfound.php';
    exit;
}
$movieId = $_GET['id'];

$movie = getMovieById($movieId);
if (!$movie) {
    include __DIR__ . '/partials/notfound.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateMovie($_POST, $movieId);
    header("Location: dashboard.php");
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Movie: <?php echo $movie['title']; ?></h3>
        </div>
        <div class="card-body">
            <?php include '_form.php' ?>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>