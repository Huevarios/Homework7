<?php
namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;
class SubjectController extends Controller {
    public function index() { $subjects = Subject::withCount('activities')->orderBy('name')->get(); return view('subjects.index', compact('subjects')); }
    public function create() { return view('subjects.create'); }
    public function store(Request $request) { $data = $request->validate(['name'=>'required|string|max:255', 'description'=>'nullable|string']); Subject::create($data); return redirect()->route('subjects.index')->with('success','Subject added successfully.'); }
    public function show($id) { $subject = Subject::findOrFail($id); $activities = $subject->activities; return view('subjects.show', compact('subject','activities')); }
    public function edit($id) { $subject = Subject::findOrFail($id); return view('subjects.edit', compact('subject')); }
    public function update(Request $request, $id) { $subject = Subject::findOrFail($id); $data = $request->validate(['name'=>'required|string|max:255', 'description'=>'nullable|string']); $subject->update($data); return redirect()->route('subjects.index')->with('success','Subject updated successfully.'); }
    public function destroy($id) { Subject::findOrFail($id)->delete(); return redirect()->route('subjects.index')->with('success','Subject deleted successfully.'); }
}
