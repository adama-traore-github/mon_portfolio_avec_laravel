@extends('layouts.app')

@section('title', __('Accueil'))

@section('content')
    @include('sections.hero')
    @include('sections.projects', ['projects' => $projects])
    @include('sections.skills', [
        'coreStack' => $coreStack,
        'skillCategories' => $skillCategories,
    ])
    @include('sections.experience', ['experiences' => $experiences])
    @include('sections.certifications')
    @include('sections.about')
    @include('sections.contact')
@endsection
