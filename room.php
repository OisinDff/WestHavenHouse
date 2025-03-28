<?php
class Room {
    private $roomNumber;
    private $capacity;

    public function __construct($roomNumber, $capacity) {
        $this->roomNumber = $roomNumber;
        $this->capacity = $capacity;
    }

    public function getRoomNumber() {
        return $this->roomNumber;
    }

    public function setRoomNumber($roomNumber) {
        $this->roomNumber = $roomNumber;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }
}
?>
