<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::fallback(function () {
    return "<h1>404 ไม่พบหน้าเว็บ</h1>";
}); 


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('student/{id}', function ($id) {
    return view("Student",['id'=>$id]);
    
})->name('student.profile');


Route::get('/abouts', [AdminController::class,'about2'])->name ("about2");
// Route::get('/blogs' ,[AdminController::class,'blogs'])->name("blogs");
Route::get('/blog2', [AdminController::class,'blog2'])->name("blog2");

Route::get('/form', [AdminController::class,'create'])->name("create");


Route::get('/product', [ProductController::class,'index'])->name("product");
Route::get('/formProduct ', [ProductController::class,'createProduct'])->name("createProduct");

Route::post('/insert', [AdminController::class,'insert'])->name("insert");


// ไฟล์ routes/web.php (ตัวอย่าง Laravel)
use App\Http\Controllers\BookController;

// เส้นทางสำหรับแสดงตารางรายชื่อหนังสือ
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// เส้นทางสำหรับแสดงฟอร์มกรอกข้อมูลหนังสือใหม่
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// เส้นทางสำหรับรับข้อมูลจากฟอร์มเพื่อบันทึก (POST)
Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employees.store');

Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');