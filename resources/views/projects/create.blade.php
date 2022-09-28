@extends('layouts.master')

@section('title','Create')
@section('konten')
    <div class="jumbotron jumbotron-fluid">
        <div class="container"> 
            <h1>Add Project List</h1>
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for='title'>Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
