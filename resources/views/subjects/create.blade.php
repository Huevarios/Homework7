@extends('layouts.app')
@section('content')<h4>Add Subject</h4><form method="POST" action="{{ route('subjects.store') }}">@csrf @include('subjects._form')</form>@endsection
