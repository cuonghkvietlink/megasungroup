@extends('frontend.layouts.master')
@section('content')
    <section class="page page-brand">
        <main class="container">
            <h1>OUR BRANDS</h1>
            <p>{!! $page->content !!}</p>

            <div class="brands">
                @foreach($brands as $brand)
                    <div class="brand-list">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="brand-image">
                                    <img src="/storage/{{ $brand->image }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="brand-title">
                                    <h3 style="color: #1b1f58; font-size:17px; font-weight: 700;">{{ $brand->name }}</h3>
                                </div>
                                <div class="brand-description">
                                    {!! $brand->description !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-link">
                                    <a href="{{ $brand->link }}" class="btn btn-primary">Visit Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </section>
@stop