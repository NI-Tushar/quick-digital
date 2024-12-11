<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        return view('quick_digital.boot_camp.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'min:11', 'max:11'],
            'profession' => ['required', 'string', 'min:2', 'max:255'],
            'institute' => ['required', 'string', 'min:2', 'max:255'],
            'gender' => ['required', 'string', 'min:2', 'max:255'],
            'interests' => ['nullable', 'array'],
            'division' => ['required', 'string', 'min:2', 'max:255'],
            'district' => ['required', 'string', 'min:2', 'max:255'],
            'address' => ['required', 'string', 'min:2', 'max:255'],
            'agree' => ['required'],
        ]);

        $bootcamp = new Bootcamp();
        $bootcamp->name = $request->name;
        $bootcamp->email = $request->email;
        $bootcamp->phone = $request->phone;
        $bootcamp->profession = $request->profession;
        $bootcamp->institute = $request->institute;
        $bootcamp->gender = $request->gender;

        // Ensure the interests array is converted to a string (JSON encoding)
        $bootcamp->interests = $request->interests ? json_encode($request->interests) : null;

        $bootcamp->division = $request->division;
        $bootcamp->district = $request->district;
        $bootcamp->address = $request->address;
        $bootcamp->agree = $request->agree;
        $bootcamp->save();

        return redirect()->back()->with('success', 'Your Request Send successfully!');
    }

}
