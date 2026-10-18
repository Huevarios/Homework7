<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Homework 7 | Grades</title><link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
<body><div class="container" style="padding-top:35px; padding-bottom:40px"><div class="d-flex justify-content-between align-items-center mb-4"><h2>My Grades</h2><a href="{{ route('subjects.index') }}" class="btn btn-outline-primary">All Subjects</a></div>
@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
@if($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
@yield('content')</div></body></html>
