<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <title>Cmd</title>
</head>
<body>
    <div>
        <h1>Hello! {{$nick}}</h1>
        <h3>你的学号为{{$id}}</h3>
        <br>
        <form action="http://jwzx.cqupt.edu.cn/jwzxtmp/kebiao/kb_stu.php" method="GET">
            输入查询学号<input type="text" name="xh">
            <button>跨站查询</button>
        </form>

    </div>
    <div>
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
    <h3>是否需要修改个人信息？</h3>
    #密码需要联系管理员验证
    <form action="/login/{login}/edit" method="GET">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="id" value="{{ $id }}" />

                    <label style="font-size:25px;">姓名</label>
                    <input type="text" name="username" placeholder="your name">
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
                    <label style="font-size:25px;">状态</label>
                    <input type="text" name="status" placeholder="status">
                    <br>
                    <button>确定</button>
    </form>

    </div>
</body>
</html>