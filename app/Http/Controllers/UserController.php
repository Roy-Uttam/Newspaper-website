<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aEmail = $request->has('email')? $request->get('email'):'';
        $aPass = $request->has('pass')? $request->get('pass'):'';

        $adminInfo= User::where('email' , '=' , $aEmail)->where('password','=', $aPass)->first();

        if(isset($adminInfo) && $adminInfo!=null){

            $newscontroller = new NewsController();
            return $newscontroller->addNews();
            
        }else{
            return redirect()->back();

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::insert([

            'name' => $request->has('uname')? $request->get('uname'):'',
            'email' => $request->has('email')? $request->get('email'):'',
            'mobile' => $request->has('mobile')? $request->get('mobile'):'',
            'password' => $request->has('pass')? $request->get('pass'):'',

        ]);
        
        return redirect('/account')->with('success' , 'Registration succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
