<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use Illuminate\Http\Request;

/**
 * Class ProgrammerController
 * @package App\Http\Controllers
 */
class ProgrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmers = Programmer::paginate();

        return view('programmer.index', compact('programmers'))
            ->with('i', (request()->input('page', 1) - 1) * $programmers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmer = new Programmer();
        return view('programmer.create', compact('programmer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programmer::$rules);

        $programmer = Programmer::create($request->all());

        return redirect()->route('programmers.index')
            ->with('success', 'Programmer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programmer = Programmer::find($id);

        return view('programmer.show', compact('programmer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programmer = Programmer::find($id);

        return view('programmer.edit', compact('programmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programmer $programmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programmer $programmer)
    {
        request()->validate(Programmer::$rules);

        $programmer->update($request->all());

        return redirect()->route('programmers.index')
            ->with('success', 'Programmer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programmer = Programmer::find($id)->delete();

        return redirect()->route('programmers.index')
            ->with('success', 'Programmer deleted successfully');
    }
}
