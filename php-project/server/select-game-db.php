<?php
require 'db-connection.php';

function get_game()
{

    $mysql = db_connection();

    $query = "SELECT * FROM list_game";

    $result = $mysql->query($query);

    $mysql->close();

    $gameDb = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            array_push($gameDb, $row);

            $path_to_picture = $row['path_to_picture'];
            $game_name = $row['game_name'];
            $number_of_keys = $row['number_of_keys'];
            $game_descriptions = $row['game_descriptions'];

            echo "<div class='game-wrapper'><img src='$path_to_picture' class='game-icon'> <div class='game-text'> <div class='game-text-name'>$game_name</div><div>Quantity key: $number_of_keys</div><div class='game-text-descriptions' >$game_descriptions</div> </div> </div>";
        }
    }
}

