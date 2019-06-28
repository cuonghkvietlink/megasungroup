@extends('frontend.layouts.master')
@section('content')
    <section class="page page-brand">
        <main class="container">
            <h1>OUR BRANDS</h1>
            <p>{!! $page->content !!}</p>

            <div class="brands">
                @foreach($brands as $brand)
                    <div class="brand-list" style="border-bottom: solid 3px {{ $brand->color }};">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="brand-image">
                                    <img src="/storage/{{ $brand->image }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="brand-title">
                                    <h3 style="color: {{ $brand->color }}; font-size:17px; font-weight: 700;">{{ $brand->name }}</h3>
                                </div>
                                <div class="brand-description">
                                    {!! $brand->description !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-link">
                                    <a href="{{ $brand->link }}" class="btn btn-primary" target="_blank"><span class="font-weight-bold">Truy cập Website</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </section>
@stop