@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3"><h4>Subjects</h4><a class="btn btn-primary" href="{{ route('subjects.create') }}">Add Subject</a></div>
<table class="table table-striped table-bordered"><thead><tr><th>#</th><th>Subject</th><th>Description</th><th>Activities</th><th>Actions</th></tr></thead><tbody>
@forelse($subjects as $subject)<tr><td>{{ $subject->id }}</td><td><a href="{{ route('subjects.show', $subject->id) }}">{{ $subject->name }}</a></td><td>{{ $subject->description ?: '—' }}</td><td>{{ $subject->activities_count }}</td><td><a class="btn btn-sm btn-info" href="{{ route('subjects.show',$subject->id) }}">Grades</a> <a class="btn btn-sm btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a> <form class="d-inline" action="{{ route('subjects.destroy',$subject->id) }}" method="POST" onsubmit="return confirm('Delete this subject and all its activities?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form></td></tr>
@empty<tr><td colspan="5">No subjects yet. Add your first subject.</td></tr>@endforelse
</tbody></table>
@endsection
