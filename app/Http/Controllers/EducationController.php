<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "educations",
            'educations' => Education::All()
        );
        return view('educations.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educations.create');
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
            'universitas' => 'required',
        ]);

        $education = new Education();
        $education->title = $request->input('title');
        $education->description = $request->input('description');
        $education->universitas = $request->input('universitas');
        $education->save();

        return redirect('educations')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Post::find($id);
            $data = array(
            'id' => "educations",
            'educations' => Education::find($id)
            );
            return view('educations.show')->with($data);
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
            'id' => "educations",
            'educations' => Education::find($id)
        );
        return view('educations.edit')->with($data);
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
            'universitas' => 'required',
        ]);

        Education::where('id', $request->id)->update([
            'title' => $request->title,
            'description' =>$request->description,
            'universitas' =>$request->universitas
        ]);

        return redirect('educations')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educations = Education::find($id);
        $educations->delete();
        return redirect('educations')->with('success','Berhasil Hapus Data');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
