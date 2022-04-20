<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TbEp;
use App\Models\TbRole;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate();
        $users = DB::select("SELECT us.id,NAME as 'name',documento,case when genero = 1 then 'M'
                                    when genero = 2 then 'F' END AS genero,
                            TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS edad,
                            telefono,ep.nombre as eps,rl.nombre as rol				
                            FROM users AS us
                            LEFT JOIN tb_eps AS ep
                            ON us.eps_id = ep.id
                            LEFT JOIN tb_roles AS rl
                            ON us.rol_id = rl.id;");
        // print_r($users);die();

        return view('user.index', compact('users'))
            ->with('i', 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        
        $eps  = TbEp::pluck('nombre','id');
        $rol  = TbRole::pluck('nombre','id');
        return view('user.create', compact('user','eps','rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(User::$rules);

        $user = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $eps  = TbEp::pluck('nombre','id');
        $rol  = TbRole::pluck('nombre','id');
        return view('user.edit', compact('user','eps','rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // request()->validate(User::$rules);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
