<?php

namespace App\Http\Controllers;

use App\Models\Arman;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{


   // الوظيفة لعرض جميع الحجوزات
   public function index()
   {   $armans = Arman::all();
       $reservations = Reservation::all();
       return view('backend.reservations.all', compact('reservations','armans'));
   }

    // عرض النموذج لإنشاء حجز جديد
    public function create()
    {
        $armans = Arman::all();
        return view('backend.reservations.create',compact('armans'));
    }


     // حفظ الحجز الجديد في قاعدة البيانات
public function store(Request $request)
{
    $messages = [
        'user_id.required' => 'حقل رقم المستخدم مطلوب',
        'user_id.exists' => 'رقم المستخدم غير صالح',

        'start_date.required' => 'حقل تاريخ البداية مطلوب',
        'start_date.date' => 'تاريخ البداية غير صالح',
        'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
        'end_date.date' => 'تاريخ الانتهاء غير صالح',
        'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
    ];
   // dd($request->all());
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',

    ], $messages);


    // إنشاء الحجز فقط في حالة صحة البيانات
    Reservation::create([
        'user_id' => Auth::id(), // استخدام معرف المستخدم الحالي
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    //Reservation::create($request->all());

    return redirect('/adminpanel/reservations')->with('success', 'Data Added successfully.');

    //return redirect()->route('reservations.index')->with('success', 'تم إنشاء الحجز بنجاح.');
}

     // عرض التفاصيل لحجز معين
     public function show(Reservation $reservation)
     {
         return view('backend.reservations.show', compact('reservation'));
     }


     // عرض النموذج لتعديل حجز معين
     public function edit(Reservation $reservation)
     {
        $armans = Arman::all();
         return view('backend.reservations.edit', compact('reservation','armans'));
     }

     // تحديث بيانات الحجز في قاعدة البيانات
     public function update(Request $request, Reservation $reservation)
     {
        $messages = [
            'user_id.required' => 'حقل رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير صالح',

            'start_date.required' => 'حقل تاريخ البداية مطلوب',
            'start_date.date' => 'تاريخ البداية غير صالح',
            'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
            'end_date.date' => 'تاريخ الانتهاء غير صالح',
            'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
        ];

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], $messages);


         $reservation->update([
             'user_id' => $request->user_id,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
         ]);

         return redirect()->route('reservations.index')->with('success', 'تم تحديث الحجز بنجاح.');
     }

     // حذف حجز معين من قاعدة البيانات
     public function destroy(Reservation $reservation)
     {
         $reservation->delete();
         return redirect()->route('reservations.index')->with('success', 'تم حذف الحجز بنجاح.');
     }

}
