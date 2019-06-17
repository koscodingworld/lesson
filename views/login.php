<?php ?>
<html>
    <head>
        <title>購票系統</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            #form_login {
                left: 45%;
                top: 40%;
                position: absolute;
            }
        </style>
        <script>
            $(function () {
                $("input[type='submit']").click(function (e) {
                    e.preventDefault();
                    let datas = {
                        account: $("#account").val(),
                        password: $("#password").val()
                    };
                    $.ajax({
                        url: "http://localhost/lesson/login",
                        data: datas,
                        type: "POST",
                        success: function (data) {
                            let obj = JSON.parse(data);
                            if (obj.status_code == "0") {
                                location.href = "http://localhost/lesson/";
                            } else {
                                alert("登入失敗");
                            }
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="row" id="form_login">
            <form action="" method="POST" id="form_login">
                <p>
                    帳號：<input type="text" name="account" id="account">
                </p>
                <p>
                    密碼：<input type="text" name="password" id="password">
                </p>
                <p>
                    <input type="submit" value="登入">
                </p>
            </form>
        </div>
    </body>
</html>

