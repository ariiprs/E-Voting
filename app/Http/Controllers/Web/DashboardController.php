<?php

namespace App\Http\Controllers\Web;

use App\Models\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $candidates = Candidate::withCount('votes')->get()->sortBy('sub_order');

        return view('pages.app.dashboard', compact('candidates'));
    }

    public function vote(Candidate $candidate)
    {
        $candidate->votes()->create([
            'voter_id' => Auth::user()->voter->id,
        ]);

        return redirect()->route('app.dashboard')->with('success', 'Voting berhasil ');
    }
}
