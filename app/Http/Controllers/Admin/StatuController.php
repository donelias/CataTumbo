<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Statu;
use Illuminate\Http\Request;

class StatuController extends Controller
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
            $statu = Statu::where('statu', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $statu = Statu::paginate($perPage);
        }

        return view('admin.statu.index', compact('statu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.statu.create');
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
        
        Statu::create($requestData);

        return redirect('admin/statu')->with('flash_message', 'Statu added!');
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
        $statu = Statu::findOrFail($id);

        return view('admin.statu.show', compact('statu'));
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
        $statu = Statu::findOrFail($id);

        return view('admin.statu.edit', compact('statu'));
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
        
        $statu = Statu::findOrFail($id);
        $statu->update($requestData);

        return redirect('admin/statu')->with('flash_message', 'Statu updated!');
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
        Statu::destroy($id);

        return redirect('admin/statu')->with('flash_message', 'Statu deleted!');
    }
}
