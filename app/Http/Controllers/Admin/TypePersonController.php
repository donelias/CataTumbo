<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TypePerson;
use Illuminate\Http\Request;

class TypePersonController extends Controller
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
            $typeperson = TypePerson::where('type_person', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $typeperson = TypePerson::paginate($perPage);
        }

        return view('admin.type-person.index', compact('typeperson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.type-person.create');
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
        
        $requestData = $request->all();
        
        TypePerson::create($requestData);

        return redirect('admin/type-person')->with('flash_message', 'TypePerson added!');
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
        $typeperson = TypePerson::findOrFail($id);

        return view('admin.type-person.show', compact('typeperson'));
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
        $typeperson = TypePerson::findOrFail($id);

        return view('admin.type-person.edit', compact('typeperson'));
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
        
        $typeperson = TypePerson::findOrFail($id);
        $typeperson->update($requestData);

        return redirect('admin/type-person')->with('flash_message', 'TypePerson updated!');
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
        TypePerson::destroy($id);

        return redirect('admin/type-person')->with('flash_message', 'TypePerson deleted!');
    }
}
