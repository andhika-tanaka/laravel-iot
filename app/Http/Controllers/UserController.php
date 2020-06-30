<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = new User();

        $datas = $user->all();

        return view('pages.user.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User;

        $this->validate($request, [
            'name' => 'required|min:2', 
            'email' => 'required', 
            'password' => 'required|min:8', 
            'address' => 'required|min:3', 
            'phone_number' => 'required|min:6'
        ]);

        $password = $request->password;

        $requestedData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ];

        $data = $user->create($requestedData);

        return redirect()->route('user.index');
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
        $data['user'] = User::find($id);
        return view('pages.user.edit', $data);
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
        $user = new User;

        $this->validate($request, [
            'name' => 'required|min:2', 
            'email' => 'required', 
            'password' => 'required|min:8',
            'address' => 'required|min:3', 
            'phone_number' => 'required|min:6'
        ]);
    
        $requestedData = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ];
        
        $data = $user->where('id', $id)->update($requestedData);

        return redirect()->route('user.index');
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
        $user = new User;

        $delete = $user->find($id)->delete();

        return redirect()->route('user.index');
    }
}
