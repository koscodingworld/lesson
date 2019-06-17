<?php

class LoginController {

    public function login() {
        $account = $_POST['account'];
        $password = $_POST['password'];
        /* 比對資料庫帳號密碼 */
        
        /* 若成功，則用 session 紀錄 user_id */
        
        /* 最後回傳 true，告訴前端成功登入 */
        echo $account;
    }

}
