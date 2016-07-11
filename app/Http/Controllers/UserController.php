<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Semua User';
        $users = User::orderBy('created_at', 'DESC')->paginate(10);

        return view('users.index', compact('page_title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'username' => 'required|string|min:6',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        $user = User::create($request->all());

        \Flash::success('User berhasil ditambah!');
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $page_title = $user->name;

        return view('users.edit', compact('page_title', 'user'));
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
        $this->validate($request,[
            'name' => 'required|string',
            'username' => 'required|string|min:6',
            'password' => 'min:6',
            'role' => 'required'
        ]);

        $data = [];

        if($request->has('password')) {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
        } else {
            $data = $request->except('password');
        }

        $user = User::findOrFail($id);
        $user->update($data);

        \Flash::success('User berhasil diubah!');
        return redirect()->route('users.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        \Flash::success('User berhasil dihapus.');
        return redirect()->back();
    }
}
