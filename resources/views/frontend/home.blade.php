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
@section('brands')
    <div class="container brands">
        <h3>Our Brands</h3>
        <ul class="brands__list">
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-herbs-01b.png" alt="Herbs of Gold"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vs-02.png" alt="Brand two"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vl-03.png" alt="Brand three"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vh-04.png" alt="Brand three"></a>
            </li>
        </ul>
    </div>
@stop