<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    public function index()
    {
        $hikes = Hike::latest()->get();
        return view('admin.hikes.index', compact('hikes'));
    }

    public function create()
    {
        return view('admin.hikes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'difficulty' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'meeting_point' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hikes', 'public');
        }

        $data['featured'] = $request->boolean('featured');

        Hike::create($data);

        return redirect()->route('admin.hikes.index')->with('success', 'Hike created successfully.');
    }

    public function edit(Hike $hike)
    {
        return view('admin.hikes.edit', compact('hike'));
    }

    public function update(Request $request, Hike $hike)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'difficulty' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'meeting_point' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hikes', 'public');
        }

        $data['featured'] = $request->boolean('featured');

        $hike->update($data);

        return redirect()->route('admin.hikes.index')->with('success', 'Hike updated successfully.');
    }

    public function destroy(Hike $hike)
    {
        $hike->delete();

        return back()->with('success', 'Deleted');
    }
}