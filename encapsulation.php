<?php
class User {
    protected string $username;
    protected $email;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email format.";
        }
    }

    public function getEmail() {
        return $this->email;
    }
}

// Usage
$user = new User();
$user->setUsername("JohnDoe");
$user->setEmail("john@example.com");

echo "Username: " . $user->getUsername() . "<br>";
echo "Email: " . $user->getEmail();
?>
