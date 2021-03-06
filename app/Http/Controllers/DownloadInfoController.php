<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class DownloadInfoController
 * @package App\Http\Controllers
 */
class DownloadInfoController extends Controller
{
    /**
     * DownloadInfoController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('download_info');
    }
}
