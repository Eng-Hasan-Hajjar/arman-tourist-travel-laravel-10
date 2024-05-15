<?php

namespace App\Http\Controllers;

use App\Models\Arman;
use Illuminate\Http\Request;

class ArmansController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $armans = Arman::latest()->paginate(5);

        return view('backend.armans.index', compact('armans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.armans.create');
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

            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('campGround_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'region' => $request->region,
            'cm_type' => $request->cm_type,
            'cm_season' => $request->cm_season,

            'campGround_image'  =>  $new_name
        );

        Arman::create($form_data);

        return redirect('/adminpanel/campgrounds')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        Arman::create($request->all());

        return redirect()->route('backend.campGrounds.index')
            ->with('success', 'backend.campGrounds. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arman $data)
    {
        return view('backend.campGrounds.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Arman::find($id);
        return view('backend.campGrounds.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arman $campground)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $campground->update($request->all());

        return redirect()->route('campground.index')
            ->with('success', 'campground updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arman $campground)
    {
        $campground->delete();

        return redirect()->route('campground.index')
            ->with('success', 'campground deleted successfully');
    }
}
