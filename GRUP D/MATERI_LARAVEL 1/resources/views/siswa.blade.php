@extends('layouts.main')

@section('container')
<h1>HELLO INI HALAMAN SISWA</h1>
<ol>

    @foreach ($studentList as $singelStudent )
    <li>{{ $singelStudent->nama }}</li>

    @endforeach
</ol>

{{-- <p>{{ $studentList }}</p> --}}
@endsection