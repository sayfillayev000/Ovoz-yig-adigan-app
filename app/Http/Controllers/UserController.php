<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function vote($id)
    {
        auth()->user()->update(['problem_id' => $id]);

        return redirect()->route('problem.index')->with('message', 'Siz muvaffaqiyatli ovoz berdingiz!');
    }

    public function users()
    {
        return view('user')->with(['users' => User::role('voter')->get()]);
    }
}
