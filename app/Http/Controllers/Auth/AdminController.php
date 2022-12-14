<?php

namespace App\Http\Controllers;

/**
 * Class AdminController.
 */
class AdminController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.login');
    }
}
