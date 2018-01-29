<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Municipality;
use App\Parish;
use App\Sector;
use App\State;
use Illuminate\Http\Request;

class SectorController extends Controller
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
            $sector = Sector::where('sector', 'LIKE', "%$keyword%")
                ->orWhere('parish_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $sector = Sector::paginate($perPage);
        }

        return view('admin.sector.index', compact('sector'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $states = State::orderBy('id', 'ASC')->pluck('state', 'id');
        return view('admin.sector.create', compact('states'));
    }

    public function getMunicipalities(Request $request, $id)
    {
        if ($request->ajax()){
            $municipalities = Municipality::municipalities($id);
            return response()->json($municipalities);
        }
    }

    public function getParishes(Request $request, $id)
    {
        if ($request->ajax()){
            $parishes = Parish::parishes($id);
            return response()->json($parishes);
        }
    }

    public function getSectors(Request $request, $id)
    {
        if ($request->ajax()){
            $sectors = Sector::sectors($id);
            return response()->json($sectors);
        }
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
        //dd($requestData);
        
        Sector::create($requestData);

        return redirect('admin/sector')->with('flash_message', 'Sector Agregado Satisfactoriamente!!');
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
        $sector = Sector::findOrFail($id);


        return view('admin.sector.show', compact('sector'));
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
        $sector = Sector::findOrFail($id);
        $states = State::orderBy('id', 'ASC')->pluck('state', 'id');

        return view('admin.sector.edit', compact('sector', 'states'));
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
        
        $sector = Sector::findOrFail($id);
        $sector->update($requestData);

        return redirect('admin/sector')->with('flash_message', 'Sector updated!');
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
        Sector::destroy($id);

        return redirect('admin/sector')->with('flash_message', 'Sector deleted!');
    }
}
