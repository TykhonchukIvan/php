<?php

require 'db-connection.php';

function get_gameNew()
{

    $mysql = db_connection();

    $query = "SELECT * FROM list_game";

    $result = $mysql->query($query);

    $mysql->close();

    $gameDb = array();

    $gameName = array();
    $gameImage = array();
    $gameKeys = array();
    $gameDescriptions = array();


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            array_push($gameDb, $row);

            $game_name = $row['game_name'];
            $path_to_picture = $row['path_to_picture'];
            $number_of_keys = $row['number_of_keys'];
            $game_descriptions = $row['game_descriptions'];

            array_push($gameName, $game_name);
            array_push($gameImage, $path_to_picture);
            array_push($gameKeys, $number_of_keys);
            array_push($gameDescriptions, $game_descriptions);

        }
    }

    $array_game = array(
        'game_name'=>$gameName,
        'path_to_picture'=>$gameImage,
        'number_of_keys'=>$gameKeys,
        'game_descriptions'=>$gameDescriptions,
    );

    echo json_encode($array_game);

};

get_gameNew();


