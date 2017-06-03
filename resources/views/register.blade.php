<!DOCTYPE html>
<html>
<head>
    <title>register</title>
</head>
<body>
<h1>#教师注册请联系管理员</h1>
    <form action="/register" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="your name">
                    <br>
                    <label style="font-size:25px;">密码</label>
                    <input type="text"  name="password" placeholder="your password">
                    <br>
                    <label style="font-size:25px;">性别</label>
                    <select name="sex">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                    <br>
                    <label style="font-size:25px;">班级</label>
                    <input type="text" name="class"  placeholder="04921601">
                    <br>
                    <label style="font-size:25px;">学院</label>
                    <input type="text" name="college"  placeholder="计算机学院">
                    <br>
                    <label style="font-size:25px;">年级</label>
                    <select name="grade">
                        <option value="1">大一</option>
                        <option value="2">大二</option>
                        <option value="3">大三</option>
                        <option value="4">大四</option>
                        <option value="其他">其他</option>
                    </select>
                    <br>
                    <label style="font-size:25px;">班级代号</label>
                    <input type="text" name="majornum" placeholder="0492">
                    <br>
                    <label style="font-size:25px;">专业名称</label>
                    <input type="text" name="majorname" placeholder="信息安全">
                    <br>
                    <label style="font-size:25px;">昵称</label>
                    <input type="text" name="nickname" placeholder="你的昵称">
                    <br>
                    <h5>;如果出现用户名重复请联系管理员</h5>
                    <button>Register</button>
    </form>
</body>
</html>