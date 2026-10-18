@extends('layouts.app')
@section('content')<h4>Edit Activity — {{ $subject->name }}</h4><form method="POST" action="{{ route('activities.update',[$subject->id,$activity->id]) }}">@csrf @method('PATCH') @include('activities._form')</form>@endsection
