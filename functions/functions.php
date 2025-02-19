<?php
function getRooms()
{
    return [
        ["name" => "Room 2", "image" => "room2.jpg"],
        ["name" => "Room 3", "image" => "room3.jpg"],
        ["name" => "Room 4", "image" => "room4.png"],
        ["name" => "Room 5", "image" => "room5.png"],
        ["name" => "Room 6", "image" => "room6.png"]
    ];
}

function displayRooms($rooms)
{
    foreach ($rooms as $room) {
        echo '<div>';
        echo '<img class="room2" src="./images/' . $room['image'] . '" alt="' . $room['name'] . '">';
        echo '<h1 class="roomText">' . $room['name'] . '</h1>';
        echo '</div>';
    }
}
