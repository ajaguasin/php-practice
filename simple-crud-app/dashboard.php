<?php include 'partials/header.php';

require 'functions/movies.php';
$movies = getMovies();

?>

<div class="container">
    <h3 class="display-3">Movie Checklist</h3>

    <p>
        <a class="btn btn-success" href="create.php">Add movie</a>
    </p>

    <table class="table">
        <thead>
            <tr>

                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Watched</th>
                <th>Comments</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($movies as $movie) : ?>


                <tr class=<?php if ($movie['watched'] == 'Yes') {
                                echo 'alert-info';
                            } else {
                                echo 'alert-warning';
                            } ?>>
                    <td>
                        <?php echo $movie['title']; ?>
                    </td>
                    <td>
                        <?php echo $movie['genre']; ?>
                    </td>
                    <td>
                        <?php echo $movie['rating']; ?>
                    </td>
                    <td>
                        <?php echo $movie['watched']; ?>
                    </td>
                    <td>
                        <?php echo $movie['comments']; ?>
                    </td>
                    <td>
                        <a href="view.php?id=<?php echo $movie['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="update.php?id=<?php echo $movie['id']; ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $movie['id']; ?>">
                            <button class="btn btn-sm btn-outline-danger">Delete</button>

                        </form>
                    </td>
                </tr>

            <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php'; ?>