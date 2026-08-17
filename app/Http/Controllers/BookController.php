<?php

// ไฟล์ app/Http/Controllers/BookController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Method: index
     * รับผิดชอบ: ดึงข้อมูลและแสดงผลหน้าจอแบบตาราง
     */
    public function index()
    {
        // สมมติข้อมูลจำลอง (Mock Data) เพื่อนำไปแสดงในตาราง
        $books = [
            ['id' => 1, 'title' => 'การเขียนโปรแกรมเบื้องต้น', 'author' => 'สมชาย ใจดี', 'price' => 250],
            ['id' => 2, 'title' => 'การออกแบบฐานข้อมูล', 'author' => 'สมหญิง รักเรียน', 'price' => 320],
        ];

        return view('books.index', compact('books'));
    }

    /**
     * Method: create
     * รับผิดชอบ: แสดงผลหน้าจอแบบฟอร์มสำหรับกรอกข้อมูล
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Method: store
     * รับผิดชอบ: รับข้อมูลที่ส่งมาจากฟอร์มเพื่อจัดการต่อ
     */
    public function store(Request $request)
    {
        // โค้ดสำหรับบันทึกข้อมูลลงฐานข้อมูลจะอยู่ที่นี่
        // ...
        
        return redirect()->route('books.index')->with('success', 'บันทึกข้อมูลสำเร็จ!');
    }
}
