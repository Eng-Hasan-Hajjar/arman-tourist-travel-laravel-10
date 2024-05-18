<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arman;
use App\Models\ArmanMuseum;

class ArmanMuseumsController extends Controller
{
         /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $armans = Arman::all();

         $museums = ArmanMuseum::latest()->paginate(5);
         return view('backend.museums.index', compact('museums','armans'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
     }
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         $armans = Arman::all();
         return view('backend.museums.create', compact('armans'));
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
         ArmanMuseum::create($form_data);
         return redirect('/adminpanel/museums ')->with('success', 'Data Added successfully.');
     }


     /**
      * Display the specified resource.
      */
     public function show($id)
     {
         $data = ArmanMuseum::find($id);
         $arman = Arman::find($data->arman_id); // إحضار الـ Arman المرتبط
         return view('backend.museums.show', compact('data','arman'));
     }

     /**
      * Show the form for editing the specified resource.
      */
     public function edit($id)
     {
         $data = ArmanMuseum::find($id);
         $armans = Arman::all();
         return view('backend.museums.edit', compact('data', 'id','armans'));
     }


     public function update(Request $request, ArmanMuseum $museum)
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
             if ($museum->image && file_exists(public_path('images/' . $museum->image))) {
                 unlink(public_path('images/' . $museum->image));
             }

             // Upload the new image
             $image = $request->file('image');
             $new_name = rand() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('images'), $new_name);

             // Add the new image name to the form data
             $form_data['image'] = $new_name;
         }

         $museum->update($form_data);

         return redirect()->route('museums.index')
             ->with('success', 'museums updated successfully');
     }
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(ArmanMuseum $museum)
     {
         $museum->delete();

         return redirect()->route('museums.index')
             ->with('success', 'museum deleted successfully');
     }
}
