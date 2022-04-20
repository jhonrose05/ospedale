<?php

namespace App\Http\Controllers;

use App\Models\TbEp;
use Illuminate\Http\Request;

/**
 * Class TbEpController
 * @package App\Http\Controllers
 */
class TbEpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbEps = TbEp::paginate();

        return view('tb-ep.index', compact('tbEps'))
            ->with('i', (request()->input('page', 1) - 1) * $tbEps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbEp = new TbEp();
        return view('tb-ep.create', compact('tbEp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TbEp::$rules);

        $tbEp = TbEp::create($request->all());

        return redirect()->route('tb-eps.index')
            ->with('success', 'TbEp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbEp = TbEp::find($id);

        return view('tb-ep.show', compact('tbEp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbEp = TbEp::find($id);

        return view('tb-ep.edit', compact('tbEp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TbEp $tbEp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TbEp $tbEp)
    {
        request()->validate(TbEp::$rules);

        $tbEp->update($request->all());

        return redirect()->route('tb-eps.index')
            ->with('success', 'TbEp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbEp = TbEp::find($id)->delete();

        return redirect()->route('tb-eps.index')
            ->with('success', 'TbEp deleted successfully');
    }
}
