@extends('layouts.master')

@section('title','Show')

@section('konten')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{$projects->title}}</h1>
            <small>Tanggal : {{$projects->created_at}}</small>
            <p>{{$projects->description}}</p>
            <a href="/projects/{{$projects->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{route('projects.destroy', $projects->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="hidden" name="id" value="{{ $projects->id }}">
                <br>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection
