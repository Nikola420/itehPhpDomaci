<!DOCTYPE html>
<?php

include "../connection/config.php";
$mysqli = new mysqli('localhost', 'root', '', 'moviesly');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movies | Moviesly</title>
    <link rel="stylesheet" href="./index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <nav id="navbar">
        <h1 id="navbar-title">MOVIESLY</h1>
    </nav>
    <div id="container">
        <table id='movies'>
            <tr>
                <th>Movie</th>
                <th>Rating</th>
                <th>Oscars Won</th>
                <th>Release Date</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Watched</th>
                <th></th>
            </tr>
            <?php
            $result = $mysqli->query("SELECT * FROM movies INNER JOIN directors ON movies.director_id = directors.director_id");
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $id = $row['id'];
                $name = $row['name'];
                $rating = $row['rating'];
                $oscars = $row['oscars'];
                $release_date = $row['release_date'];
                $genre = $row['genre'];
                $watched = $row['watched'];
                $director_name = $row['director_name'];
            ?>
                <tr>
                    <td><?= $name; ?></td>
                    <td class="star-rating-row">
                        <div class="star-rating">
                            <?= $rating; ?>
                        </div>
                        <div class="image-wrapper">
                            <img src='./img/star.png' class='star-rating-img' style='width: 15px; height: 15px;' alt=''>
                        </div>
                    </td>
                    <td class="oscar-won-row">
                        <div class="oscar-won">
                            <?= $oscars; ?>
                        </div>
                        <div class="image-wrapper">
                            <img src='./img/trophy.png' class='oscar-won-img' style='width: 15px; height: 15px;' alt=''>
                        </div>
                    </td>
                    <td><?= $release_date; ?></td>
                    <td><?= $genre; ?></td>
                    <td><?= $director_name; ?></td>
                    <td class="marks-row" align="center">
                        <div class="image-wrapper">
                            <?php
                            if ($watched == 0) {
                            ?>
                                <img src="img/crossmark.png" id="crossmark" class="crossmark" style="width: 15px; height: 15px;" alt="">
                            <?php
                            } else {
                            ?>
                                <img src="img/tick.png" class="tick" style="width: 20px; height: 20px;" alt="">
                            <?php
                            }
                            ?>
                        </div>
                    </td> 1
                    <td class="anchors-row">
                        <span class='odgledao' data-id='<?= $id; ?>'>Watched</span>
                        <span class='delete' data-id='<?= $id; ?>'>Delete</span>
                    </td> 
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
</body>

</html>