<?php

namespace App\Http\Controllers;

use App\Models\ludia;
use Illuminate\Http\Request;

class MainPage extends Controller
{
    public function index()
    {
        $ludia = ludia::all();
        return view('welcome', ['ludia' => $ludia] );
    }

    public function create()
    {
        return view('Database.create');
    }

    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'surname' => 'required'
            ]);

            ludia::create([
              'name'=> \request('name'),
              'surname'=> \request('surname')
            ]);

            return redirect()->route('home');
    }

    public function update(ludia $ludia)
    {
        request()->validate([
            'name' => 'required',
            'surname' => 'required'
        ]);


        $ludia->update([
            'name' => \request('name'),
            'surname' => \request('surname')
        ]);
    }

    public function edit(ludia $ludia)
    {

        return view('Database.edit', ['ludia' => $ludia] );
    }

    public function destroy(ludia $ludia)
    {
            $ludia->delete();

            return redirect()->route('home');
    }
}
