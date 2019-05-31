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
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>View Movie: <?php echo $movie['title']; ?></h4>
        </div>

        <div class="card-body">
            <a href="update.php?id=<?php echo $movie['id'] ?>" class="btn btn-secondary">Update</a>
            <form style="display: inline-block;" action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $movie['id']; ?>">
                <button class="btn btn-danger">Delete</button>

            </form>
        </div>

        <table class="table">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?php echo $movie['title']; ?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?php echo $movie['genre']; ?></td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td><?php echo $movie['rating']; ?></td>
                </tr>
                <tr>
                    <th>Watched</th>
                    <td><?php echo $movie['watched']; ?></td>
                </tr>
                <tr>
                    <th>Comments</th>
                    <td><?php echo $movie['comments']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<?php include 'partials/footer.php'; ?>