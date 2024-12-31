<?php

class User {
    public string $name;
    private string $nid;
    public int $age;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_nid($nid) {
       
        if (strlen($nid) == 10 && ctype_digit($nid)) {
            $this->nid = $nid;
            return "NID is valid.";
        } else {
            return "Invalid NID number must be exactly 10 digits.";
        }
    }

    function get_nid() {
        return $this->nid;
    }

    function set_age($age) {
        $this->age = $age;
    }

    function get_age() {
        return $this->age;
    }
}

$user = new User();
echo $user->set_nid("12345678902222");
echo "<br>";
echo $user->set_nid("12345abcde");

?>
