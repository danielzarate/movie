<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Serie;
use App\Models\Cast;

class AdminController extends Controller
{


    public function index()
    {


        $users=User::all();
        $movies=Movie::all();
        $series=Serie::all();
        $casts=Cast::all();
        return view('admin.index',compact('users','movies','series','casts'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
