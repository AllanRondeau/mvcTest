<?php

require_once('Database.php');

class User
{
    private $id;
    private $email;
    private $password;
    private $created_at;
    private $updated_at;

    /**
     * @param $email
     * @param $password
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($email, $password, $created_at, $updated_at)
    {
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function getUser(string $email)
    {
        try {
            $db = connection();
            $query = $db->prepare("SELECT * FROM users WHERE email = :email");
            $query->bindValue(':email', $email);
            $query->execute();
            return $query->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            var_dump($e);
        }

    }

    public static function insertUser(string $email, string $password)
    {
        $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*!])[A-Za-z\d@#$%^&*!]{8,}$/';

        if(preg_match($regex, $password) && !strpos($password, $email)){
            try {
                $db = connection();

                $query = $db->prepare('INSERT INTO users(email, password, created_at, updated_at) VALUES (:email, :password, NOW(), NOW())');

                $password = hash('sha256', $password);
                $query->bindValue(':email', $email, PDO::PARAM_STR);
                $query->bindValue(':password', $password, PDO::PARAM_STR);

                $query->execute();
                return true;
            } catch (\Exception $e) {
                return false;
            }
        }
        else{
            return false;
        }


    }

}