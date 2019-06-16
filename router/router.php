<?php

define('ROOT', __DIR__ . '/..');
include_once ROOT . "/autoload.php";
$request = $_SERVER['REDIRECT_URL'];
$request = explode("/", $request);

/* 網址路徑（url："/lesson"） */
switch ($request[2]) {
    /*首頁*/
    case '' :
        Route::view(__DIR__ . '/views/index.php');
        break;
    /* 會員 */
    case "user":
        switch ($request[3]) {
            case 'search' :
                (new UserController())->search();
                var_dump((new DB())->connect());
                break;
            /* 404 */
            default:
                echo "找不到此網頁";
                break;
        }
        break;
    /* 404 */
    default:
        echo "找不到此網頁";
        break;
}

class Route {

    public static function view($url) {
        header("Location:" . $url);
    }

}
