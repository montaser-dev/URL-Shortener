<?php

namespace App\Http\Controllers;


class ShortUserController extends Controller
{
    public function index()
    {
        $links = auth()->user()->links()->orderBy('visits', 'desc')->paginate(6);

        return view('links.index', compact('links'));
    }
}
