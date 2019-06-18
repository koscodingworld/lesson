
<html>
    <head>
        <title>購票系統</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/lesson/custom/style.css">
    </head>
    <body>

        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">購票系統</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown login">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HI~歡迎<span></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="loginDropDown">
                            <a class="dropdown-item" href="#">查看個人資訊</a>
                            <a class="dropdown-item" href="#">查看訂單紀錄</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-login">
                        <a class="nav-link dropdown-toggle" href="#" id="noLoginDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            尚未登入
                        </a>
                        <div class="dropdown-menu" aria-labelledby="noLoginDropDown">
                            <a class="dropdown-item" href="#">來註冊吧</a>
                            <a class="dropdown-item" href="#">我要登入</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row no-gutters" id="middleContent">
            <div class="col-2">
                <ul class="nav flex-column bg-light h-100">
                    <li class="nav-item py-2 ">
                        <a class="nav-link text-dark" href="#">我想購票</a>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link text-dark" href="#">查詢訂單</a>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link text-dark" href="#">最新消息</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <div id="main">

                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="row fixed-bottom no-gutters bg-dark text-light">
            ©Only For lesson
        </div>

    </body>
</html>
