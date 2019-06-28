@extends('frontend.layouts.master')
@section('content')

    <section class="slider" style="margin-top: -16px; margin-bottom: 50px;">
        <img src="http://www.vitalifesciences.com/assets/img/hero-02.jpg" style="max-height: 400px; width: 100%"/>
    </section>
    <section class="page home-content">
        <main class="container">
            <figure>
                <img src="/storage/{{ $page->image }}" alt="Map">
            </figure>
            <div class="home-content__description">
                {!! $page->content !!}
            </div>
            <div class="clearfix"></div>
        </main>
    </section>

    <section class="three-buckets">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="/brand">
                        <img src="http://www.vitalifesciences.com/assets/img/bucket-01.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/investor">
                        <img src="http://www.vitalifesciences.com/assets/img/bucket-01b.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/company">
                        <img src="http://www.vitalifesciences.com/assets/img/bucket-03b.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop