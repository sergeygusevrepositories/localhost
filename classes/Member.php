<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 10.04.17
 * Time: 21:21
 */
class Member
{
    public $username = "";
    private $loggedIn = false;

    public function login() {
        $this->loggedIn = true;
    }

    public function logout() {
        $this->loggedIn = false;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }

    public function listMyProperties() {
        echo "My properties are: ";
        print_r(get_object_vars($this));
    }
}

class Administrator extends Member {
    public $adminLevel = 1;

    public function createForum($forumName) {
        echo $this->username . " created a new forum: " . $forumName . "<br />";
    }

    public function banMember($member) {
        echo $this->username . " banned the member: " . $member . "<br />";
    }
}

//$member = new Member();
//$member->username = "Fred";
//$member->login();

//$memberString = serialize($member);
//echo "Converted the Member object to a string: " . $memberString . "<br />";
//echo "Converted the string back to an object...<br />";
//$member2 = unserialize($memberString);
//echo $member2->username . " is " . ($member2->isLoggedIn() ? "logged in" : "logged out") . "<br />";

//echo get_class($member);

$admin = new Administrator();
$admin->username = "Mary";
$admin->login();

echo "1. $admin->username's class is " . get_class($admin) . "<br />";
echo "2. $admin->username's parent class is " . get_parent_class($admin) . "<br />";
echo "3. Is $admin->username a Member? " . (is_a($admin, "Member") ? "Yes" : "No") . "<br />";
echo "4. $admin->username's methods are: ";
print_r(get_class_methods($admin));
echo "<br />5. $admin->username's properties are: ";
print_r(get_class_vars(get_class($admin)));
echo "<br />6. $admin->username's object properties are: ";
print_r(get_object_vars($admin));
echo "<br />7. ";
$admin->listMyProperties();