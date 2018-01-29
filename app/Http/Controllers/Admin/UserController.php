<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Person;
use App\TypePerson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $user = User::where('user', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('role_id', 'LIKE', "%$keyword%")
                ->orWhere('statu_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $user = User::paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $typePersonn = TypePerson::orderBy('id', 'desc')->pluck('type_person', 'id');

        return view('admin.user.create', compact('typePersonn'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'type' => 'required|numeric|max:5',
            'identity' => 'required|numeric',
            'user' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //consultar cedula
        $customer = Person::where('identity', $data['identity'])->first();
        if ($customer != null)
        {
            echo "cedula si existe el ID es: " . $customer->id;
            if ($customer->user_id == null)
            {
               $user = User::create([
                    'user' => $request['user'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'role_id' => 4,
                    'status_id' => 2,
                ]);
               $userId = $user->id;
               //dd($userId);

                DB::table('people')
                    ->where('id', $customer->id )
                    ->update([
                        'user_id' => $userId,
                    ]);

                return redirect('register')->with('flash_message', 'Usuario registrado Correctamente, por favor revice su E-mail para activar su cuenta!');


            }else{

                return redirect('register')->with('flash_message', 'Estimado cliente ya posee un usuario asignado, Por favor contactenos para mayor informacion!');
            }
        }else{

            return redirect('register')->with('flash_message', 'Estimado cliente su Rif no se encuentra en nuestros registros, Por favor contactenos para mayor informacion!');
        }


         /**/

        /*
         //envio del correo para acivacion de cuenta
        $url = route('confirmation', ['active' => $user->email]);

        \Mail::send('emails/registration', compact('user', 'url'), function ($m) use ($user){

            $m->from('hector@galindeztravel.com.ve', 'Info Emprendimiento');
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });*/


        //$requestData = $request->all();

        //dd($requestData);
        
        //User::create($requestData);

        //return redirect('login')->with('flash_message', 'Usuario Registrado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('admin/user')->with('flash_message', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }
}
