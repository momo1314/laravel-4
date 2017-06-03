<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }
    public function store(Request $request) {
        $salt = 'admin233';
        $info = $request->all();
        $output = DB::table('students')->where('s_name',$info['username'])->get();
        if(empty($output)){
            $insertid = DB::table('students')->insertGetId(['s_name'=>$info['username'],'password'=>md5($info['password'].$salt),'s_sex'=>$info['sex'],'s_class'=>$info['class'],'s_college'=>$info['college'],'s_grade'=>$info['grade'],'s_majornum'=>$info['majornum'],'s_majorname'=>$info['majorname'],'s_status'=>'NULL']);
            $insert = DB::table('nickname')->insert(array('s_id'=>$insertid,'nick_name'=>$info['nickname']));
            $request->session()->put('id',$insertid);
            echo '<script>alert("This is your login id :'.$insertid.'");</script>';
        }
        else{
            echo '账号名字已存在，请检查或联系管理员代为添加';
        }
        return view('home',['id'=>$insertid,'nick'=>$info['nickname']])->withStudents(\App\Student::all());
    }

}
