@extends('layout')

@section('title', 'เพิ่มบทความใหม่')

@section('content')

    <h2>เพิ่มบทความใหม่</h2>
    <hr>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group mb-3">
            <label for="title">ชื่อบทความ</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror

        <div class="form-group mb-3">
            <label for="content">เนื้อหาบทความ</label>
            <textarea class="form-control" cols = "30" rows="6" id="content" name="content">{{ old('content') }}</textarea>
        </div>
        @error('content')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror


        <input type="submit" value="บันทึก" class="btn btn-success my-3">
    </form>

@endsection
