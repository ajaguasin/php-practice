<form action="" method="post">
    <div class="form-group">
        <label>Title</label>
        <input required type="text" name="title" value="<?php echo $movie['title']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Genre</label>
        <input required type="text" name="genre" value="<?php echo $movie['genre']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Rating</label>
        <select required name='rating' class="form-control">
            <option value='0' <?php if ((int)$movie['rating'] == 0) echo "selected"; ?>>0</option>
            <option value='1' <?php if ((int)$movie['rating'] == 1) echo "selected"; ?>>1</option>
            <option value='2' <?php if ((int)$movie['rating'] == 2) echo "selected"; ?>>2</option>
            <option value='3' <?php if ((int)$movie['rating'] == 3) echo "selected"; ?>>3</option>
            <option value='4' <?php if ((int)$movie['rating'] == 4) echo "selected"; ?>>4</option>
            <option value='5' <?php if ((int)$movie['rating'] == 5) echo "selected"; ?>>5</option>
        </select>
    </div>
    <div class="form-group">

        <label>Watched</label>
        <select required name="watched" class="form-control">

            <option value="No" <?php if ($movie['watched'] == 'No') echo "selected"; ?>>No</option>
            <option value="Yes" <?php if ($movie['watched'] == "Yes") echo "selected"; ?>>Yes</option>

        </select>
    </div>
    <div class="form-group">
        <label>Comments</label>
        <input required type="text" name="comments" value="<?php echo $movie['comments']; ?>" class="form-control">
    </div>

    <button class="btn btn-success">Submit</button>
</form>