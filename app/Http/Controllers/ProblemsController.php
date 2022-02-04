<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use Illuminate\Support\Facades\DB;

class ProblemsController extends Controller
{
    public function index()
    {
        $context = ['problems' => DB::table('problems')->get()];
        return view('kb/kb', $context);
    }

    public function detail(Problem $problemID)
    {
        return view('kb/detail', ['problem' => $problemID]);
    }
}
