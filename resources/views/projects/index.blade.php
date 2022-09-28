@extends('layouts.master')

@section('Title','Posts')
@section('konten')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <a href="{{ route('projects.create') }}" type="button" class="btn btn-outline-primary">Tambahkan Projects Baru</a>
        <h1 class="judul">Project Lists</h1>
        @if(count($projects)>0)
            @foreach ($projects as $project)
            <div class="well">
                <h3><a href="/projects/{{$project->id}}">
                        {{$project->title}}
                    </a></h3>
                <small>Tanggal : {{$project->created_at}}</small>
            </div>
            @endforeach
        @else
            <h3>Tidak ada data.</h3>
        @endif
    </div>
</div>
@endsection