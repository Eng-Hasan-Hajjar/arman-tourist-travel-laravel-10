<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arman;
use App\Models\ArmanLake;

class ArmanLakesController extends Controller
{
       /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $armans = Arman::all();

         $lakes = ArmanLake::latest()->paginate(5);
         return view('backend.lakes.index', compact('lakes','armans'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
     }
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         $armans = Arman::all();
         return view('backend.lakes.create', compact('armans'));
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
         ArmanLake::create($form_data);
         return redirect('/adminpanel/lakes')->with('success', 'Data Added successfully.');
     }


     /**
      * Display the specified resource.
      */
     public function show($id)
     {
         $data = ArmanLake::find($id);
         $arman = Arman::find($data->arman_id); // إحضار الـ Arman المرتبط
         return view('backend.lakes.show', compact('data','arman'));
     }

     /**
      * Show the form for editing the specified resource.
      */
     public function edit($id)
     {
         $data = ArmanLake::find($id);
         $armans = Arman::all();
         return view('backend.lakes.edit', compact('data', 'id','armans'));
     }


     public function update(Request $request, ArmanLake $lake)
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
             if ($lake->image && file_exists(public_path('images/' . $lake->image))) {
                 unlink(public_path('images/' . $lake->image));
             }

             // Upload the new image
             $image = $request->file('image');
             $new_name = rand() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('images'), $new_name);

             // Add the new image name to the form data
             $form_data['image'] = $new_name;
         }

         $lake->update($form_data);

         return redirect()->route('lakes.index')
             ->with('success', 'lakes updated successfully');
     }
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(ArmanLake $lake)
     {
         $lake->delete();

         return redirect()->route('lakes.index')
             ->with('success', 'lakes deleted successfully');
     }
}
