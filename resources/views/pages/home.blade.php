@extends('layouts.app')

@section('title', 'GREECO - Viện Đào tạo và nghiên cứu Môi trường')

@push('jsonld')
    @include('components.jsonld.faq', ['faqs' => $faqs ?? collect()])
@endpush

@section('content')
    @include('pages.home._hero')
    @include('pages.home._about')
    @include('pages.home._services')
    @include('pages.home._projects')
    @include('pages.home._why-choose')
    @include('pages.home._security')
    @include('pages.home._pricing')
    @include('pages.home._team')
    @include('pages.home._cta')
    @include('pages.home._faqs')
    @include('pages.home._blog')
@endsection
