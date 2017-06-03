<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class LoginController extends Controller
{
    public function index() {
        return view('welcome');
    }


    public function store(Request $request) {
        $salt = 'admin233';

        $info = $request->all();
        $output = DB::table(($info['admin']?'teachers':'students'))->where(($info['admin']?'t_id':'s_id'),$info['username'])->get();


        if(empty($output)){
            echo 'error id ! <br> please register!';
        }
        else{
            if($output[0]->password === md5($info['pwd'].$salt))
            {

                $request->session()->put('id',$info['username']);


                if(!$info['admin']){
                    $nickname = DB::table('nickname')->where("s_id",$info['username'])->pluck('nick_name');
                    return view('home',[
                        'id'=>$info['username'],
                        'nick'=>$nickname[0]
                        ])->withStudents(\App\Student::all());

                }else{
                    $permission = DB::table('permission')->where('id',$info['username'])->pluck('status');
                    return view('admin',[
                        'id'=>$info['username'],
                        'per'=>$permission[0]])->withStudents(\App\Student::all());
                }

            }else{
                echo '错误的密码';
            }
        }
    }

    public function edit(Request $request) {
        $info = $request->all();
        $update = DB::table('students')->where('s_id',$info['id'])->update(['s_name'=>$info['username'],'s_sex'=>$info['sex'],'s_class'=>$info['class'],'s_college'=>$info['college'],'s_grade'=>$info['grade'],'s_majornum'=>$info['majornum'],'s_majorname'=>$info['majorname'],'s_status'=>$info['status']]);

        $nick_res = DB::table('nickname')->where('s_id',$info['id'])
                        ->update(['nick_name'=>$info['nickname']]);

        if($update&&$nick_res){

            echo 'success';
            return view('home',[
                        'id'=>$info['id'],
                        'nick'=>$info['nickname']
                        ])->withStudents(\App\Student::all());
        }else{
            echo 'error';
        }
    }
}
