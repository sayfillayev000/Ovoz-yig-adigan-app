<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProblemRequest;
use App\Models\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index()
    {
        return view('problem.index')->with(['problems' => Problem::all()]);
    }

    public function show(Problem $problem)
    {
        return view('problem.show')->with(['problem' => $problem]);
    }
    public function create()
    {
        return view('problem.create');
    }
    public function store(ProblemRequest $request)
    {
        Problem::create($request->all());

        return redirect()->route('problem.create')->with('message', "Muammo muvoffaqqiyatli qo'shildi");
    }
    public function edit() {}
    public function update(Request $request) {}
    public function destroy() {}
}
