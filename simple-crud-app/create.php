<?php
include __DIR__ . '/partials/header.php';
require 'functions/movies.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $movie = createMovie($_POST);
    header("Location: dashboard.php");
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Add Movie: <?php echo $movie['title']; ?></h3>
        </div>
        <div class="card-body">
            <?php include '_form.php' ?>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>