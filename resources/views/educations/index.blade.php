@extends('layouts.master')

@section('Title','Education')
@section('konten')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <a href="{{ route('educations.create') }}" role="button" class="btn btn-outline-primary">Buat Education Baru</a>
        <h1 class="judul">Education Lists</h1>
        @if(count($educations)>0)
            @foreach ($educations as $education)
            <div class="well">
                <h3><a href="/educations/{{$education->id}}">
                        {{$education->title}}
                    </a></h3>
                <small>Tanggal : {{$education->created_at}}</small>
            </div>
            @endforeach
        @else
            <h3>Tidak ada data.</h3>
        @endif
    </div>
</div>
@endsection