<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    


    function addProject(Project $project)
    {

        $userId = Auth::user()->id;
        $projectId = $project->id;

        $project->find($projectId)->users()->attach($userId);


        return redirect()->back()->with('success', 'project assigned to project successfully.');
    }
    function submission(Project $project, User $user)
    {

        $userId = Auth::user()->id;
        $user = User::find($userId);

        $projectId = $project->id;
        $project = Project::find($projectId);

        $title = 'Submit Projects';

        return view('submission', compact('project', 'title', 'user'));
    }
    function add_submission(Request $request, Project $project, User $user)
    {

        $validatedData = $request->validate([
            'file_path' => 'required',
        ]);

        $id = $project->id;
        $project = Project::find($id);
        $project->status = 'Complete';
        $project->update($validatedData);


        $request->session()->flash('create_success', 'Success update the project');
        return redirect('/myprojects');
    }

    /**
     * Display a listing of the resource.
     */
    public function loadMyProjects()
    {

        $userId = Auth::user()->id;

        $user = User::find($userId);

        $projects = $user->projects;
        $title = 'Your Projects';
        return view('myprojects', compact('projects', 'title'));
    }
    public function loadAllProjects()
    {

        $projects = Project::whereDoesntHave('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();

        $title = 'Search Projects';

        return view('projects', compact('projects', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'project_manager' => 'required',
            'role' => 'required',
            'description' => 'required',
            'start_at' => 'required|date',
            'due_date' => 'required|date',
        ]);

        Project::create($validatedData);
        $request->session()->flash('create_success', 'Succsess Create the project');
        return redirect('/projects');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('update', ['title' => 'Update', 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $validatedData = $request->validate([
            'section' => 'required',
            'messages' => 'required'
        ]);

        $id = $project->id;
        $project = Project::find($id);

        if ($project->due_date < now() && $project->file_path !== null) {
            $project->status = 'Complete';
        } elseif ($project->due_date < now()) {
            $project->status = 'Due date passed';
        } else {
            $project->status = 'On progress';
        }
        $project->update($validatedData);

        $request->session()->flash('success', 'Success update the project');
        return redirect('/myprojects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $userId = Auth::id();

        $project->users()->detach($userId);

        return redirect()->back()->with('success', 'project removed from project successfully.');
    }
}
