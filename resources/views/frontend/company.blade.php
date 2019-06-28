@extends('frontend.layouts.master')
@section('content')
    <section class="page page-company">
        <main class="container">
            <h1>Tập đoàn chúng tôi</h1>
            <div class="row">
                <div class="col-md-4">
                    {!! $page->content !!}
                </div>
                <div class="col-md-8">
                    <img src="/storage/{{ $page->image }}" alt="Company">
                </div>
            </div>
        </main>
    </section>
@stop