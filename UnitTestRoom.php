<?php
use PHPUnit\Framework\TestCase;
require_once 'Room.php';

class UnitTestRoom extends TestCase {
    public function testRoomConstructorAndGetters() {
        $room = new Room("A101", 30);

        $this->assertEquals("A101", $room->getRoomNumber());
        $this->assertEquals(30, $room->getCapacity());
    }

    public function testSetRoomNumber() {
        $room = new Room("A101", 30);
        $room->setRoomNumber("B202");

        $this->assertEquals("B202", $room->getRoomNumber());
    }

    public function testSetCapacity() {
        $room = new Room("A101", 30);
        $room->setCapacity(50);

        $this->assertEquals(50, $room->getCapacity());
    }
}
?>
