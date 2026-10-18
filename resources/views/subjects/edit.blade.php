@extends('layouts.app')
@section('content')<h4>Edit Subject</h4><form method="POST" action="{{ route('subjects.update',$subject->id) }}">@csrf @method('PUT') @include('subjects._form')</form>@endsection
