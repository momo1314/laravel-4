<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CmdController extends Controller
{
    public function index() {
        view('admin')->withStudents(\App\Student::all());
    }

    public function store(Request $request){
        $salt = "admin233";
        $info = $request->all();//               ↓被顶替成username？？？
        if($info['flag'] === '1'){
            $update = DB::table('students')->where('s_id',$info['id'])
                            ->update(['s_name'=>$info['username'],'s_sex'=>$info['sex'],'s_class'=>$info['class'],'s_college'=>$info['college'],'s_grade'=>$info['grade'],'s_majornum'=>$info['majornum'],'s_majorname'=>$info['majorname'],'s_status'=>$info['status']]);

            $nick_res = DB::table('nickname')->where('s_id',$info['id'])
                            ->update(['nick_name'=>$info['nickname']]);

            if($update&&$nick_res){

                echo 'success';
                return view('admin',[
                            'id'=>$info['id'],
                            'nick'=>$info['nickname']
                            ])->withStudents(\App\Student::all());
            }else{
                echo 'error';
            }
        }
        elseif($info['flag'==='0']&&$info['id']!='1'){
            $update = DB::table('teachers')
                    ->where('t_id',$info['id'])
                    ->update(['t_name'=>$info['username']],'t_college'=>$info['college'],'status'=>$info['status'],'notice'=>$info['body']);
            if($update){
                echo 'success';
            }else{
                echo 'error';
            }
        }elseif ($info['flag']==='2'&&$info['id']==='1') {
            $update = DB::table('teachers')
                    ->where('t_id',$info['t_id'])
                    ->update(['t_name'=>$info['username']],'t_college'=>$info['college'],'status'=>$info['status'],'notice'=>$info['body']);
            if($update){
                echo 'success';
            }else{
                echo 'error';
            }
        }elseif ($info['flag']==='3'&&$info['id']==='1') {
            $output = DB::table('students')->where('s_name',$info['username'])->get();
            if(empty($output)){
                $insertid = DB::table('students')->insertGetId(['s_id'=>$info['s_id'],'s_name'=>$info['username'],'password'=>md5($info['password'].$salt),'s_sex'=>$info['sex'],'s_class'=>$info['class'],'s_college'=>$info['college'],'s_grade'=>$info['grade'],'s_majornum'=>$info['majornum'],'s_majorname'=>$info['majorname'],'s_status'=>'NULL']);
                $insert = DB::table('nickname')->insert(array('s_id'=>$insertid,'nick_name'=>$info['nickname']));
                if($insertid&&$insert){
                    echo 'success';
                }
            }

        }elseif ($info['flag']==='4'&&$info['id']==='1') {
            $insertid = DB::table('students')->insertGetId(["t_id"=>$info['t_id'],"t_name"=>$info['username'],"t_college"=>$info['college'],"password"=>md5($info['password'].$salt),'status'=>'1',"notice"=>$info['body']]);
            if($insertid){
                echo "success";
            }
        }

    }
}
