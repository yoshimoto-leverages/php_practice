<?php

class UserRepository extends DbRepository
{
    public function insert($user_name, $password)
    {
        $passsword = $this->hasPassword($password);
        $now = new DateTime();

        $sql = "
            INSERT INTO user(user_name, password, created_at)
            VALUES(:user_name, :password, :created_at)
            ";

        $stmt = $this->execute($sql, array(
            'user_name' => $user_name,
            'password'  => $passsword,
            'created_at'=>$now->format('Y-m-d H:i:s'),
        ));
        }

    public function hashPassword($password)
    {
        return sha1($password . 'SecretKey');
    }

    public function fetchByUserName($user_name)
    {
        $sql = "SELECT * FROM user WHERE user_name = :user_name";

        return $this->fetch($sql, array(':user_name' => $user_name));
    }

    public function isUniqueUserName($user_name)
    {
        $sql = "SELECT COUNT(id) as count FROM user WHERE user_name = :user_name";
        echo $sql;
        $row = $this->fetch($sql, array(':user_name' => $user_name));
        if($row['count'] === '0'){
            return true;
        }

        return false;
    }
<<<<<<< HEAD

    public function fetchAllFollwingsByUserId($user_id)
    {
        $sql = "
                SELECT u.*
                FROM user u
                    LEFT JOIN following f ON f.following_id u.id
                WHERE f.user_id = :user_id
                ";

                return $this->fetchAll($sql, array(':user_id' => $user_id));
    }
=======
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
}

?>