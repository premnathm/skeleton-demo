<?php


namespace Ahilmurugesan\SkeletonDemo\Http\Controllers;


use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{

    /**
     * Index function for our sample controller file
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('skeleton-demo::userList', compact('users'));
    }
}
