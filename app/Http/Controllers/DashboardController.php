<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\ReturnTypePass;

class DashboardController extends Controller
{
    public function index(Project $project, User $user)
    {
        $title = 'dashboard';
        $userId = Auth::user()->id;
        $user = $user->find($userId);
        $now = Carbon::now();
        $dueSoon = $now->addDays(7);

        $projectsDueSoon = Project::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->whereBetween('due_date', [Carbon::now(), $dueSoon])->get();

        // Menghitung total jumlah project yang diambil oleh pengguna
        $totalProjectsCount = Project::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->count();

        // Menghitung jumlah project dengan status 'On progress'
        $projectsOnProgressCount = Project::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->where('status', 'On progress')->count();

        // Menghitung jumlah project dengan status 'Complete'
        $projectCompleteCount = Project::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->where('status', 'Complete')->count();

        return view('dashboard', compact('title', 'user', 'projectsOnProgressCount', 'projectCompleteCount', 'totalProjectsCount', 'projectsDueSoon'));
    }
}
