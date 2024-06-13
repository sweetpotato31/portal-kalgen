<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\User;
use App\Models\Activity_Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return view('admin/dashboard',['users'=>$users,
                    'title' => 'dashboard'
    ]);
    }

    public function user(){
        $users = User::all();
        $division = Division::all();
        $totalUser = User::whereNotNull('nik')->count();
        $totalVisitors = Activity_Log::whereNotNull('id')->count();
        return view('admin/user',compact('division', 'totalUser', 'totalVisitors'), ['users'=>$users,
                    'title' => 'user'
    ]);
    }

    public function create(Request $request){
        // return $request->all();
        // die;
        $request->validate([
            'nik' => ['required', 'max:5'],
            'username' => ['required'],
            'division_id' => ['required'],
            // 'password' => ['required']
        ]);
        $defaultPassword = '12345678';
        $hashedPassword = Hash::make($defaultPassword);
        User::create([
            'username'=> $request->username,
            'nik'=> $request->nik,
            'division_id'=> $request->division_id,
            'password'=> $hashedPassword
        ]);
        $request->session()->flash('success','Data Berhasil di registrasi!');
        return redirect('/admin/user');
    }
    public function destroy($nik)
    {
        $user = User::where('nik', $nik)->first();
        if ($user) {
            $user->delete();
            return redirect('/admin/user')->with('success-deleted', 'Data User Berhasil di Hapus');
        } else {
            return redirect('/admin/user')->with('error-deleted', 'User not found');
        }
    }
    public function edit($nik){
        $users = User::where('nik',$nik)->first();
        $division = Division::all();
        return view('admin/user-edit', compact('division', 'users'),[
            'title' => 'user'
        ]);
    }
    public function update(Request $request, $nik){
        $request->validate([
            'nik' => ['required', 'max:5', 'string', 'numeric'],
            'username' => ['required'],
            'division_id' => ['required'],
            // 'password' => ['required']
        ]);
        $defaultPassword = '12345678';
        $hashedPassword = Hash::make($defaultPassword);
        $user = User::where('nik',$nik)->first();
        $user->update([
            'username'=> $request->username,
            'nik'=> $request->nik,
            'division_id'=> $request->division_id,
            'password'=> $hashedPassword
        ]);
        if($user){$request->session()->flash('success','Data berhasil di ubah');
            return redirect('/admin/user');
        }else{
            $request->session()->flash('failed','Data Gagal di ubah');
            return redirect('/admin/user');
        }
        
    }
        
    }
    

