<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();
w
        return view('publishers.index', compact('publishers'));
    }

    public function show($id){
        $publisher = Publisher::findOrFail($id);

        return view('publishers.show', compact('publisher'));
    }
}
