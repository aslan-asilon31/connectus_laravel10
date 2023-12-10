<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Datatables;
  

class UserController extends Controller
{
    
    public function index(){

        return view('users.index');
    }

    public function getdata(){

        if(request()->ajax()) {
            return datatables()->of(User::select('*'))
            ->addColumn('action', 'users.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // $users = User::all();
        // return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;


        $user->save();

     
        return redirect()->route('users.index')
                        ->with('success','User has been created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    } 


    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
    
        return redirect()->route('users.index')
                        ->with('success','User Has Been updated successfully');
    }

}
