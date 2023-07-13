<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ShowUser(){
        // $users = DB::table('teachers')->get();
        // return $users;
        // dd($users);

        // $users = DB::table('teachers')->where('id',2)->get();
        // return view('allUsers',['data'=>$users]);

        // $users = DB::table('teachers')->find(3);
        // return $users;

        $users = DB::table('teachers')
                //    ->get();
                ->simplePaginate(3);
        return view('allUsers',['data'=>$users]);
    }
    public function singleUser(string $id){
        $user = DB::table('teachers')->where('id',$id)->get();
        // return view('allUsers',['data'=>$user]);
        return view('user',['data'=>$user]);
    }

    public function addUser(Request $req){
        $user = DB::table('teachers')
                         ->insert( [
                            'id' => $req->userid,
                            'name' => $req->username,
                            'email' => $req->useremail,
                            'age' => $req->userage,
                            'city' => $req->usercity,
                            'created_at' => now(),
                            'updated_at' => now()
                         ]);
                        //  ->insertOrIgnore([
                        //     [
                        //         'id' => '10',
                        //         'name' => 'Zakir Hossain',
                        //         'email' => 'Zakir@gmail.com',
                        //         'age' => 25,
                        //         'city' => 'Pabna',
                        //         'created_at' => now(),
                        //         'updated_at' => now()
                        //     ],
                        //     [
                        //         'id' => '11',
                        //         'name' => 'Salman Khan',
                        //         'email' => 'salman@gmail.com',
                        //         'age' => 16,
                        //         'city' => 'Mumbai',
                        //         'created_at' => now(),
                        //         'updated_at' => now()
                        //      ]
                        //  ]);

                        //    ->upsert(
                        //     [
                        //         'name' => 'Ali Hossain',
                        //         'email' => 'ali@gmail.com',
                        //         'age' => 22,
                        //         'city' => 'Sylhet',
                        //         'created_at' => now(),
                        //         'updated_at' => now()
                        //     ],
                        //     ['email']
                        //    );

                  if($user){
                    return redirect()->route('home');
                  }else{
                    echo '<h4>Data not added.</h4>';
                  }

        }

        public function UpdatePage(string $id){
            // $user = DB::table('teachers')->where('id',$id)->get();
            $user = DB::table('teachers')->find($id);
            return view('updateuser',['data'=>$user]);
        }

        public function UpdateUser(Request $req, $id){
            $user = DB::table('teachers')
                        // ->where('id',9)
                        // ->update([
                        //     'city' => 'Paris',
                        //     'age' => '26'
                        // ]);
                        ->where('id',$id)
                        ->update([
                            'id' => $req->userid,
                            'name' => $req->username,
                            'email' => $req->useremail,
                            'age' => $req->userage,
                            'city' => $req->usercity,
                        ]);
            if($user){
                return redirect()->route('home');
                }else{
                echo '<h4>Data not updated.</h4>';
                }
          }

        public function deleteData(string $id){
            $user = DB::table('teachers')
                        ->where('id',$id)
                        ->delete();

            if($user){
                return redirect()->route('home');
                }else{
                echo '<h4>Data not deleted.</h4>';
                }
        }
}
