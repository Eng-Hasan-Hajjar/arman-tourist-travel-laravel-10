<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmanCastle;
use App\Models\Arman;
class ArmanCastlesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castles = ArmanCastle::latest()->paginate(5);

        return view('backend.castles.index', compact('castles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.castles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$user=User::user();
        $request->validate([
            'arman_id' => 'required',
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'location' => 'required',
            'date' => '',

            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'arman_id'=> $request->arman_id,
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,

            'image'  =>  $new_name
        );

        ArmanCastle::create($form_data);

        return redirect('/adminpanel/castles')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        ArmanCastle::create($request->all());

        return redirect()->route('backend.castles.index')
            ->with('success', 'backend.castles. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ArmanCastle::find($id);
        return view('backend.castles.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = ArmanCastle::find($id);
        return view('backend.castles.edit', compact('data', 'id'));
    }

    /*
     * Update the specified resource in storage.

    public function update(Request $request, Arman $arman)
    {

       $arman->update($request->all());

        return redirect()->route('arman.index')
            ->with('success', 'arman updated successfully');
    }
    */
    public function update(Request $request, ArmanCastle $castles)
    {
        $request->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'location' => 'required',
            'date' => '',
            'image' => 'nullable|image|max:2048',
        ]);

        $form_data = [
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->airport,
        ];

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($castles->image && file_exists(public_path('images/' . $castles->image))) {
                unlink(public_path('images/' . $castles->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);

            // Add the new image name to the form data
            $form_data['image'] = $new_name;
        }

        $castles->update($form_data);

        return redirect()->route('castles.index')
            ->with('success', 'castles updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArmanCastle $castles)
    {
        $castles->delete();

        return redirect()->route('castles.index')
            ->with('success', 'castles deleted successfully');
    }
}
