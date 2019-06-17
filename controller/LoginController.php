<?php

class LoginController {

    public function login() {
        $account = $_POST['account'];
        $password = $_POST['password'];
        /* 取得資料庫比對結果 */
        $compareResult = (new Users())->compareLogin($account, $password);
        /* 若成功，則用 session 紀錄 user_id */
        if (count($compareResult) > 0) {
            $userId = $compareResult[0]["id"];
//            $_SESSION["user_id"] = $userId;
            $returnValue["status_code"] = 0;
        } else {
            $returnValue["status_code"] = -1;
        }
        echo json_encode($returnValue);
    }

}
