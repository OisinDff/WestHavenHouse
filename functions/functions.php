<?php
function getRooms()
{
    return [
        ["name" => "Room 1", "image" => "room5.png", "description" => "A charming room with a vintage decor."],
        ["name" => "Room 2", "image" => "room2.jpg", "description" => "A cozy room with a beautiful view."],
        ["name" => "Room 3", "image" => "room3.jpg", "description" => "A spacious room with modern amenities."],
        ["name" => "Room 4", "image" => "room4.png", "description" => "A luxurious room with a king-sized bed."],
        ["name" => "Room 5", "image" => "room5.png", "description" => "A charming room with a vintage decor."],
        ["name" => "Room 6", "image" => "room6.png", "description" => "A stylish room with a contemporary design."],
        ["name" => "Room 7", "image" => "room5.png", "description" => "A charming room with a vintage decor."],
        ["name" => "Room 8", "image" => "room5.png", "description" => "A charming room with a vintage decor."],
        ["name" => "Room 9", "image" => "room5.png", "description" => "A charming room with a vintage decor."],
        ["name" => "Room 10", "image" => "room5.png", "description" => "A charming room with a vintage decor."]
    ];
}

function displayRooms($rooms)
{
    foreach ($rooms as $room) {
        echo '<div style="position: relative;">';
        echo '<img class="room2" src="./images/' . $room['image'] . '" alt="' . $room['name'] . '">';
        echo '<h1 class="roomText">' . $room['name'] . '</h1>';
        echo '<p>' . $room['description'] . '</p>';
        echo '<a href="book.php?room=' . urlencode($room['name']) . '" class="bookButton">Book</a>';
        echo '</div>';
    }
}
