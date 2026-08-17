<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ], [
            'name.required' => 'กรุณากรอกชื่อพนักงาน',
            'name.min' => 'ชื่อพนักงานต้องมีอย่างน้อย 3 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง'
        ]);

        \App\Models\Employee::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'บันทึกข้อมูลพนักงานสำเร็จ!');
    }
}
