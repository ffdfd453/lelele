<?php
class User {
   
    public $login;
    private $password;
    protected $email;
    static $zagolovok = "h3";
    const welcome = 'Добро пожаловать';

    public function __construct($login, $password, $email) {
        $this->login = "user";
        $this->password = "12345";
        $this->email = "";
    }

    public function hello() {
        echo "Добро пожаловать, " . $this->login . "\n";
    }

    
}
$user = new User("admin", "qwerty", "lelele@gmail.com");
echo $user->hello();

$user1 = new User();

$user2 = new User("1", "2", "3");

echo User::$zagolovok;
echo User::welcome;
echo $user1->hello();
?>