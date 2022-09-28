@extends('layouts.master')

@section('title','Show')

@section('konten')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{$educations->title}}</h1>
            <small>Tanggal : {{$educations->created_at}}</small>
            <p>{{$educations->description}}</p>
            <h2 >Asal Universitas : {{$educations->universitas}}</h2>
            <a href="/educations/{{$educations->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{ route('educations.destroy', $educations->id) }}" method="POST">
                @method('DELETE')
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{
                $educations->id }}"> <br />
                <button type="submit" class="btn
                btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection
