<?php

class Users {

    private $id;
    private $name;
    private $account;
    private $password;

    public function compareLogin($account, $password) {
        $pdo = (new Db())->connect();
        $sql = "SELECT * FROM users WHERE `account` = ? AND `password` = ?";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(array($account, $password));
        if ($result) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $data = [];
        }
        return $data;
    }

}
