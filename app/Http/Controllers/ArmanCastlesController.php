<?php

namespace App\Http\Controllers;

use App\Models\Arman;
use Illuminate\Http\Request;
use App\Models\ArmanCastle;
class ArmanCastlesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $armans = Arman::all();

        $castles = ArmanCastle::latest()->paginate(5);
        return view('backend.castles.index', compact('castles','armans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $armans = Arman::all();
        return view('backend.castles.create', compact('armans'));
    }

    public function store(Request $request)
    {
        // للتحقق من البيانات المرسلة من النموذج
        // dd($request->all());

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
            'arman_id' => $request->arman_id,
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'image' => $new_name,
        );

        ArmanCastle::create($form_data);

        return redirect('/adminpanel/castles')->with('success', 'Data Added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ArmanCastle::find($id);
        $arman = Arman::find($data->arman_id); // إحضار الـ Arman المرتبط
        return view('backend.castles.show', compact('data','arman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = ArmanCastle::find($id);
        $armans = Arman::all();
        return view('backend.castles.edit', compact('data', 'id','armans'));
    }


    public function update(Request $request, ArmanCastle $castle)
    {
        $request->validate([
            'arman_id' => 'required',
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $form_data = [
            'arman_id' => $request->arman_id,
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
        ];

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($castle->image && file_exists(public_path('images/' . $castle->image))) {
                unlink(public_path('images/' . $castle->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);

            // Add the new image name to the form data
            $form_data['image'] = $new_name;
        }

        $castle->update($form_data);

        return redirect()->route('castles.index')
            ->with('success', 'castles updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArmanCastle $castle)
    {
        $castle->delete();

        return redirect()->route('castles.index')
            ->with('success', 'castles deleted successfully');
    }
}
