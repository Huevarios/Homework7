@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-2"><div><h4>{{ $subject->name }}</h4><p class="text-muted">{{ $subject->description }}</p></div><a class="btn btn-primary" href="{{ route('activities.create',$subject->id) }}">Add Activity</a></div>
@if($activities->count())<p><strong>Average grade:</strong> {{ number_format($activities->avg('grade'),2) }} / 100 <small class="text-muted">(simple average)</small></p>@endif
<table class="table table-striped table-bordered"><thead><tr><th>Activity</th><th>Type</th><th>Grade</th><th>Date</th><th>Notes</th><th>Actions</th></tr></thead><tbody>
@forelse($activities as $activity)<tr><td>{{ $activity->title }}</td><td>{{ $activity->type }}</td><td>{{ number_format($activity->grade,2) }} / 100</td><td>{{ $activity->date }}</td><td>{{ $activity->notes ?: '—' }}</td><td><a class="btn btn-sm btn-primary" href="{{ route('activities.edit',[$subject->id,$activity->id]) }}">Edit</a> <form class="d-inline" method="POST" action="{{ route('activities.destroy',[$subject->id,$activity->id]) }}" onsubmit="return confirm('Delete this activity?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form></td></tr>
@empty<tr><td colspan="6">No graded activities yet.</td></tr>@endforelse
</tbody></table><a href="{{ route('subjects.index') }}" class="btn btn-secondary">Back to Subjects</a>
@endsection
