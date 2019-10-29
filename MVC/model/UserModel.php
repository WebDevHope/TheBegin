<?php
    class UserModel extends Model {
        public function __construct()
        {
            parent::__construct();
        }
        public function checkLogin ($userName, $userPass) {
            $sql = "SELECT * FROM user WHERE username = :userName AND password = :userPass";
            $userQuery = $this->db->prepare($sql);
            $userQuery->execute([
               ':userName' => $userName,
               ':userPass' => $userPass
            ]);
            return $userQuery ->fetch();
        }
    }