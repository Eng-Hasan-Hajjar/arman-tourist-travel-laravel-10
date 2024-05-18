<?php

namespace App\Http\Controllers;

use App\Models\Arman;
use Illuminate\Http\Request;

class ArmanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $armans = Arman::latest()->paginate(5);

        return view('backend.arman.index', compact('armans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.arman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$user=User::user();
        $request->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'location' => 'required',
            'airport' => '',

            'image' => 'image|max:2048',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'airport' => $request->airport,


            'image'  =>  $new_name
        );

        Arman::create($form_data);

        return redirect('/adminpanel/arman')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        Arman::create($request->all());

        return redirect()->route('backend.arman.index')
            ->with('success', 'backend.arman. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Arman::find($id);
        return view('backend.arman.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Arman::find($id);
        return view('backend.arman.edit', compact('data', 'id'));
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
    public function update(Request $request, Arman $arman)
    {
        $request->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'location' => 'required',
            'airport' => '',
            'image' => 'nullable|image|max:2048',
        ]);

        $form_data = [
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'airport' => $request->airport,
        ];

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($arman->image && file_exists(public_path('images/' . $arman->image))) {
                unlink(public_path('images/' . $arman->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);

            // Add the new image name to the form data
            $form_data['image'] = $new_name;
        }

        $arman->update($form_data);

        return redirect()->route('arman.index')
            ->with('success', 'Arman updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arman $arman)
    {
        $arman->delete();

        return redirect()->route('arman.index')
            ->with('success', 'arman deleted successfully');
    }
}
