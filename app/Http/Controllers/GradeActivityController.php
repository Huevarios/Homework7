<?php
namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;
class GradeActivityController extends Controller {
    private function validateActivity(Request $request) { return $request->validate(['title'=>'required|string|max:255', 'type'=>'required|in:Homework,Activity,Quick Test,Midterm,Final Exam,Project,Other', 'grade'=>'required|numeric|between:0,100', 'date'=>'required|date', 'notes'=>'nullable|string']); }
    public function create($subject) { $subject = Subject::findOrFail($subject); return view('activities.create', compact('subject')); }
    public function store(Request $request, $subject) { $subject = Subject::findOrFail($subject); $subject->activities()->create($this->validateActivity($request)); return redirect()->route('subjects.show',$subject->id)->with('success','Activity added successfully.'); }
    public function edit($subject, $activity) { $subject = Subject::findOrFail($subject); $activity = $subject->activities()->findOrFail($activity); return view('activities.edit', compact('subject','activity')); }
    public function update(Request $request, $subject, $activity) { $subject = Subject::findOrFail($subject); $activity = $subject->activities()->findOrFail($activity); $activity->update($this->validateActivity($request)); return redirect()->route('subjects.show',$subject->id)->with('success','Activity updated successfully.'); }
    public function destroy($subject, $activity) { $subject = Subject::findOrFail($subject); $subject->activities()->findOrFail($activity)->delete(); return redirect()->route('subjects.show',$subject->id)->with('success','Activity deleted successfully.'); }
}
