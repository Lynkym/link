<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        $jobs = $query->latest()->paginate(12)->withQueryString();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title', 'company', 'location', 'work_mode',
            'salary_min', 'salary_max', 'description',
            'stack', 'status', 'contact_email',
        ]);

        if (! empty($data['stack']) && is_string($data['stack'])) {
            $data['stack'] = array_map('trim', explode(',', $data['stack']));
            $data['stack'] = array_filter($data['stack']);
            $data['stack'] = array_values($data['stack']);
        }

        $validated = \Validator::make($data, [
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'work_mode' => 'required|in:remote,onsite,hybrid',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'description' => 'required|string',
            'stack' => 'nullable|array',
            'status' => 'required|in:active,pending,closed',
            'contact_email' => 'nullable|email|max:255',
        ])->validated();

        Job::create($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Oferta de empleo creada correctamente.');
    }

    public function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->only([
            'title', 'company', 'location', 'work_mode',
            'salary_min', 'salary_max', 'description',
            'stack', 'status', 'contact_email',
        ]);

        if (! empty($data['stack']) && is_string($data['stack'])) {
            $data['stack'] = array_map('trim', explode(',', $data['stack']));
            $data['stack'] = array_filter($data['stack']);
            $data['stack'] = array_values($data['stack']);
        }

        $validated = \Validator::make($data, [
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'work_mode' => 'required|in:remote,onsite,hybrid',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'description' => 'required|string',
            'stack' => 'nullable|array',
            'status' => 'required|in:active,pending,closed',
            'contact_email' => 'nullable|email|max:255',
        ])->validated();

        $job->update($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Oferta de empleo actualizada correctamente.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Oferta de empleo eliminada correctamente.');
    }
}
