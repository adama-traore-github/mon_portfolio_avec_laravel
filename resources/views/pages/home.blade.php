@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    @include('sections.hero')
    @include('sections.projects')
    @include('sections.skills')
    @include('sections.experience')
    @include('sections.certifications')
    @include('sections.about')
    @include('sections.contact')
@endsection
