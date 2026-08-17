<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function blog2()
    {
        $blog2 = DB::table('blogs')->get();

        return view('blog2', compact('blog2'));
    }

    public function about2()
    {
        $name = 'Jakkaphan Nitinattanan';
        $id = '68152310337-7';
        $date = '6 กรกฎาคม 2569';

        return view('abouts', compact('id', 'name', 'date'));
    }

    public function create()
    {
        return view('form');
    }

    public function insert(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'content' => 'required',

        ],
            [
                'title.required' => 'กรุณาใส่ชื่อบทความ',
                'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
                'content.required' => 'กรุณาใส่เนื้อหาบทความ',

            ]);
        $data = [
            'title' => $req->input('title'),
            'content' => $req->input('content'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('blogs')->insert($data);

        return redirect('/blog2');
    }


    public function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();

        return redirect()->route('blog2');

    }

    // week10
    public function change($id)
    {
        $blog = (DB::table("blogs")->where('id', $id)->first());
        $data = [
            'status' => !$blog->status
        ];
        DB::table('blogs')->where('id', $id)->update($data);
        return redirect('blog2');

    }
    function edit($id){
        $blog = DB::table("blogs")->where('id', $id)->first();
        return view("edit", compact('blog'));
    }
    public function update(Request $request, $id){
        $request->validate([
        'title' => 'required|max:50',
        'content' => 'required',
    ], [
        'title.required' => 'กรุณาใส่ชื่อบทความ',
        'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
        'content.required' => 'กรุณาใส่เนื้อหา',
    ]);
    $data = [
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ];
    DB::table("blogs")->where('id', $id)->update($data);
    return redirect('/blog2');
    }
    
}
