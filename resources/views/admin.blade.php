<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <title>Teacher</title>
</head>
<body>
    <div>
        <h1>Hello! 老师</h1>
        <h3></h3>
        <br>

    </div>
    <div>
    <h1>学生名单</h1>
        <table border="1" WIDTH="800"  HEIGHT="20">
        @foreach($students as $student)
            <tr>
              <td align=center>{{$student->s_id}}</td>
              <td align=center>{{$student->s_name}}</td>
              <td align=center>{{$student->s_class}}</td>
              <td align=center>{{$student->s_college}}</td>
              <td align=center>{{$student->s_grade}}</td>
              <td align=center>{{$student->s_majornum}}</td>
              <td align=center>{{$student->s_majorname}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <div>
        <h1>修改学生信息</h1>
        <form action="/home" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="flag" value="1" />
            <label style="font-size:25px;">学号</label>
                    <input type="text" name="id" placeholder="student id">
                    <br>
            <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="student name">
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
                    <input type="text" name="nickname" placeholder="学生的昵称">
                    <br>
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <button>更改</button>
        </form>
        <h1>修改自己信息</h1>
        <form action="/home" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="flag" value="0" />
            <input type="hidden" name="id" value="{{$id}}" />
            <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="your name">
                    <br>
                    <label style="font-size:25px;">学院</label>
                    <input type="text" name="college" placeholder="计算机学院">
                    <br>
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <br>
                    <br>
                    <label style="font-size:40px;">修改公告</label>
                    <textarea name="body" rows="10"  placeholder="请输入内容"></textarea>
                    <button>更改</button>
            <br>
        </form>
        <h1>真是一个贫苦的管理员</h1>
        <form action="/home" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="flag" value="2" />
            <input type="hidden" name="id" value="{{$id}}" />
            <h3>修改任意老师信息</h3>
                    <label style="font-size:25px;">教师id</label>
                    <input type="text" name="t_id" placeholder="teacher id">
                    <br>
                    <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="teacher name">
                    <br>
                    <label style="font-size:25px;">学院</label>
                    <input type="text" name="college" placeholder="计算机学院">
                    <br>
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <br>
                    <br>
                    <label style="font-size:40px;">修改公告</label>
                    <textarea name="body" rows="10"  placeholder="请输入内容"></textarea>
                    <button>更改</button>
            <br>
        </form>
        <form action="/home" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="flag" value="3" />
            <input type="hidden" name="id" value="{{$id}}" />
            <h3>增加学生信息</h3>
                    <label style="font-size:25px;">学生id</label>
                    <input type="text" name="s_id" placeholder="student id">
                    <br>
                    <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="student name">
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
                    <input type="text" name="nickname" placeholder="学生的昵称">
                    <br>
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <button>确定</button>
            <br>
        </form>
        <form action="/home" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="flag" value="4" />
            <input type="hidden" name="id" value="{{$id}}" />
            <h3>增加教师信息</h3>
                    <label style="font-size:25px;">教师id</label>
                    <input type="text" name="t_id" placeholder="teacher id">
                    <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="teacher name">
                    <br>
                     <label style="font-size:25px;">密码</label>
                    <input type="text"  name="password" placeholder="your password">
                    <br>
                    <label style="font-size:25px;">学院</label>
                    <input type="text" name="college" placeholder="计算机学院">
                    <br>
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <button>确定</button>
            <br>
        </form>
    </div>
</body>
</html>