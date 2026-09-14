<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = collect([
            (object) [
                'id' => 1,
                'title' => 'Senior Frontend Engineer',
                'company' => 'Vercel',
                'location' => 'Remote, US',
                'salary' => '$150k - $180k',
                'status' => 'active',
                'created_at' => now()->subDays(2),
                'stack' => ['React', 'Next.js', 'TypeScript'],
            ],
            (object) [
                'id' => 2,
                'title' => 'React UI Developer',
                'company' => 'CloudScale',
                'location' => 'New York, NY',
                'salary' => '$130k - $160k',
                'status' => 'active',
                'created_at' => now()->subDays(5),
                'stack' => ['React', 'Redux', 'Tailwind CSS'],
            ],
            (object) [
                'id' => 3,
                'title' => 'Backend Engineer',
                'company' => 'Stripe',
                'location' => 'San Francisco, CA',
                'salary' => '$160k - $200k',
                'status' => 'pending',
                'created_at' => now()->subDays(1),
                'stack' => ['Go', 'PostgreSQL', 'Redis'],
            ],
        ]);

        return view('admin.jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = (object) [
            'id' => $id,
            'title' => 'Senior Frontend Engineer',
            'company' => 'Vercel',
            'location' => 'Remote, US',
            'salary' => '$150k - $180k',
            'status' => 'active',
            'description' => 'We are looking for a Senior Frontend Engineer to help us build the next generation of our web platform.',
            'stack' => ['React', 'Next.js', 'TypeScript'],
        ];

        return view('admin.jobs.show', compact('job'));
    }

    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required|in:active,pending,rejected',
        ]);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Estado del empleo actualizado.');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.jobs.index')
            ->with('success', 'Empleo eliminado correctamente.');
    }
}
