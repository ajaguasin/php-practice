<?php

function getMovies()
{
    return json_decode(file_get_contents("data.json"), true);
}

function getMovieById($id)
{
    $movies = getMovies();
    foreach ($movies as $movie) {
        if ($movie['id'] == $id) {
            return $movie;
        }
    }
    return null;
}

function updateMovie($data, $id)
{
    $movies = getMovies();
    foreach ($movies as $i => $movie) {
        if ($movie['id'] == $id) {
            $movies[$i] = array_merge($movie, $data);
        }
    }
    putJson($movies);
}

function createMovie($data)
{
    $movies = getMovies();
    $data['id'] = rand(1000000, 2000000);
    $movies[] = $data;
    putJson($movies);

    return $data;
}

function deleteMovie($id)
{
    $movies = getMovies();
    foreach ($movies as $i => $movie) {
        if ($movie['id'] == $id) {
            array_splice($movies, $i, 1);
        }
    }
    putJson($movies);
    header("Location: dashboard.php");
}

function putJson($movies)
{
    file_put_contents("data.json", json_encode($movies));
}
