<?php
class User {
    private $members = [];

    public function __construct($members = []) {
        $this->members = $members;
    }

    public function addMember($memberName) {
        $this->members[] = $memberName;
    }

    public function getAllMembers() {
        return implode(', ', $this->members);
    }

    public function getMembersArray() {
        return $this->members;
    }
}
?>
