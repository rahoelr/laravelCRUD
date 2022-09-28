<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "projects",
            'projects' => Project::All()
        );
        return view('projects.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $project = new Project();
        $project -> title = $request->input('title');
        $project -> description = $request -> input('description');
        $project -> save();

        return redirect('projects')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Project::find($id);
        $data = array(
            'id' => 'projects',
            'projects' => Project::find($id)
        );
        return view('projects.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "projects",
            'projects' => Project::find($id)
        );
        return view('projects.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        
        Project::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('projects')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::find($id);
        $projects->delete();
        return redirect('projects')->with('success','Berhasil Hapus Data');
    }
}
