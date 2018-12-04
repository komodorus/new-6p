<?php

namespace App\Http\Controllers\Dashboard;

use App\Tag;
use App\Client;
use App\Images;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Client::all();
        $tags = Tag::all();

        return view('dashboard.project.create', compact('clientes', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            $request->all()
        ]);
        $validate = $this->validate($request, [
            'title' => 'required',
            'client_id' => 'required'
            ]);
            
        // $files = $request->file('images');

        $project = Project::create([
            'title' => request('title'),
            'client_id' => request('client_id')
        ]);
                
        foreach(request('tags') as $tag){
            if(mb_substr($tag, 0, 1, 'utf-8') === '#'){
                
                $createdTag = Tag::create([
                    'title' => $tag
                ]);

                $project->tags()->attach($createdTag->id);

            }else{
                $project->tags()->attach(
                    Tag::where('id', $tag)->first()->id
                );
            }
        }

        // foreach($files as $file){

        //     $path = $file->store('uploads/projects');

        //     Images::create([
        //         'project_id' => $project->id,
        //         'path' => Storage::url($path)
        //     ]);
        // }

        $capa = $request->file('avatar')->store('uploads/projects');

        Images::create([
            'project_id' => $project->id,
            'path' => Storage::url($capa),
            'cover' => true
        ]);

        return response()->json([
            'mensagem' => 'successo'
        ]);

        return redirect('dashboard')->with('status', 'Projeto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
