<?php

define('ROOT', '../');
include_once ROOT . "/autoload.php";
$request = $_SERVER['REDIRECT_URL'];
var_dump($request);
$request = explode("/", $request);
/* 網址路徑（url："/lesson"） */
switch ($request[2]) {
    /* 會員 */
    case "user":
        /* 若沒 */
        if (!isset($request[3])) {
            echo "找不到此網頁";
            return;
        }
        switch ($request[3]) {
            case 'search' :
                Route::toControllerAction("User", "search");
                break;
            /* 404 */
            default:
                echo "找不到此網頁";
                break;
        }
        break;
    case "login":
        Route::view('views/login.php');
        break;
    /* 404 */
    default:
        echo "找不到此網頁";
        break;
}

class Route {

    public static function view($url) {
        var_dump($url);
        echo "<script>location.href='" . $url . "'</script>";
    }

    public static function toControllerAction($controller, $action) {
        $className = $controller . "Controller";
        (new $className())->$action();
    }

}
