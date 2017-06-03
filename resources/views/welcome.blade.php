<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="{{ url('/login') }}" method="POST">
                    <div class="title">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <select name="admin">
                            <option value="1">教师</option>
                            <option value="0">学生</option>
                        </select>
                        <label style="font-size:25px;">用户名</label>
                        <input type="text" name="username" placeholder="username">
                        <br>
                        <label style="font-size:25px;">密码</label>
                        <input type="password"  name="pwd">
                        <br>
                        <button>Login</button>
                    </div>
                </form>
            </div>
                <form action="/register" method="GET">
                    <button>Register</button>
                </form>
        </div>
    </body>
</html>
