<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Person;
use App\Sector;
use App\State;
use App\TypePerson;
use Illuminate\Http\Request;

class PersonController extends Controller
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
            $person = Person::Where('identity', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('phone_nomber', 'LIKE', "%$keyword%")
                ->orWhere('cellphone', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $person = Person::paginate($perPage);
        }

        return view('admin.person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $type = TypePerson::orderBy('id', 'ASC')->pluck('type_person', 'id');
        $sector = Sector::orderBy('id', 'ASC')->pluck('sector', 'id');
        $states = State::orderBy('id', 'ASC')->pluck('state', 'id');

        return view('admin.person.create', compact('type', 'sector', 'states'));
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
            'type_id' => 'required|numeric|max:5',
            'identity' => 'required|numeric|unique:people',
            'name' => 'required|string|max:255',
            'sector_id' => 'required|numeric',
            'address' => 'required',
            'phone_nomber' => 'required|string|max:13',
            'cellphone' => 'required|string|max:13',
        ]);

        //dd($data);

         Person::create([
            'type_id' => $data['type_id'],
            'identity' => $data['identity'],
            'name' => $data['name'],
            'phone_nomber' => $data['phone_nomber'],
            'cellphone' => $data['cellphone'],
             'address' => $data['address'],
             'sector_id' => $data['sector_id'],
             'role_id' => 1,
             'status_id' => 1,
        ]);

         //Person::create($requestData);

        return redirect('admin/customers')->with('flash_message', 'Cliente Agregado Satisfactoriamente!');
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
        $person = Person::findOrFail($id);

        return view('admin.person.show', compact('person'));
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
        $person = Person::findOrFail($id);
        $type = TypePerson::orderBy('id', 'ASC')->pluck('type_person', 'id');
        $states = State::orderBy('id', 'ASC')->pluck('state', 'id');

        return view('admin.person.edit', compact('person', 'type', 'states'));
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
        
        //$requestData = $request->all();
        $data = $this->validate($request, [
            'type_id' => 'required|numeric|max:5',
            'identity' => 'required|numeric',
            'name' => 'required|string|max:255',
            'address' => 'required',
            'phone_nomber' => 'required|string|max:13',
            'cellphone' => 'required|string|max:13',
        ]);
        
        $person = Person::findOrFail($id);
        $person->update($data);

        return redirect('admin/customers')->with('flash_message', 'Cliente Actualizado Correctamente!');
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
        Person::destroy($id);

        return redirect('admin/person')->with('flash_message', 'Person deleted!');
    }
}
