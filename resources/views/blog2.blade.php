@extends('layout')

@section('title', 'หน้าแสดงบทความทั้งหมด')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="mb-4 text-primary border-bottom pb-2">บทความทั้งหมด</h2>
            <table class="table table-bordered border-warning text-center">
                <thead>
                    <tr class="table-warning text-center">
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อบทความ</th>
                        {{-- <th scope="col">เนื้อหาบทความ</th> --}}
                        <th scope="col">สถานะ</th>
                        <th scope="col">แก้ไขบทความ</th>
                        <th scope="col">ลบบทความ</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($blog2 as $item)
                        @php
                            $i = $loop->iteration;
                        @endphp
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td class="text-start">{{ Str::limit($item->title, 20) }}</td>
                            {{-- <td class="text-start">{{ Str::limit($item->content, 150) }}</td> --}}
                            <td class="text-center">
                                @if ($item->status)
                                    <a href="{{ route('change', $item->id) }}" class="btn btn-success">เผยแพร่</a>
                                @else
                                    <a href="{{ route('change', $item->id) }}" class="btn btn-outline-danger">ฉบับร่าง</a>
                                @endif
                            </td>
                            <td><a href="{{ route('edit', $item->id) }}" class="btn btn-primary">แก้ไขบทความ</a></td>
                            <td><a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                                    onclick="return confirm('คุณต้องการลบบทความนี้ {{ $item->title }} จริงหรือไม่?')">ลบ</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endsection
