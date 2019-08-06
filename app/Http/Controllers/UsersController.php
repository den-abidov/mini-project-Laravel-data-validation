<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message = 'Первичное обращение' ;
        return view('users/create')->with('message',$message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\StoreUser $request)
    {
        // создай (модель) нового пользователя
        $user = new \App\User;

        /* 
        Валидацию перенесли => StoreUser@rules 
        
        request()->validate([
            'sponsor_id'=>'required|exists:users',
            'name'=>'required|string|max:60',
            'phone'=>'required|min:10|max:12',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:3|max:20'
        ]);
        
        $user->sponsor_id = request('sponsor_id');
        $user->name = request('name');
        $user->phone = request('phone');
        $user->email = request('email');
        $user->password = request('password');        
        */
        
        // The incoming request is valid...
        // Retrieve the validated input data...
        $validated = $request->validated();

        $user->sponsor_id = $validated['sponsor_id'];
        $user->name = $validated['name'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];

        /*$user->sponsor_id = 1;
        $user->name = 'Денис';
        $user->phone = '89528900108';
        $user->email = 'den-abidov@yandex.ru';
        $user->password = 'helloworld';*/

        // сохрани запись в таблицу
        $user->save();

        // перенаправь обратно на страницу добавления нового пользователя
        $message = "пользователь добавлен";
        return view('/users/create')->with('message',$message);
        //redirect('/users/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
