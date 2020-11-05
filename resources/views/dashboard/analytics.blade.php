@extends('layouts.admin')

@section('content')

{{ Breadcrumbs::render('dashboard') }}

<dashboard-analytics></dashboard-analytics>
@endsection
