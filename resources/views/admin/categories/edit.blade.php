@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.categories.edit', $category) }}
@endsection

@section('content')
    edit
@endsection