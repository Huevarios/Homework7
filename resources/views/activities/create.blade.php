@extends('layouts.app')
@section('content')<h4>Add Activity — {{ $subject->name }}</h4><form method="POST" action="{{ route('activities.store',$subject->id) }}">@csrf @include('activities._form')</form>@endsection
