@extends('frontend.layouts.master')
@section('content')
    <section class="slider" style="margin-bottom: 50px;">
        <div id="slider1" class="owl-carousel owl-theme">
            @foreach($slides as $slide)
                <div><img src="/storage/{{ $slide->image }}" alt="{{ $slide->name }}" /></div>
            @endforeach
        </div>
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
    <section class="three-buckets" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="/">
                        <img src="g" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/">
                        <img src="" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/">
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
@section('brands')
    <div class="container brands">
        <h3>Công ty thành viên</h3>
        <div id="slider2" class="owl-carousel owl-theme">
            @foreach($brands as $brand)
                <div class="item">
                    <a href="/brand"><img style="max-width: 150px" src="/storage/{{ $brand->image }}" alt="{{ $brand->name }}"></a>
                </div>
            @endforeach
        </div>
    </div>
@stop
@push('js-stack')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script>
    $(document).ready(function(){
        $('#slider1').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('#slider2').owlCarousel({
            items: 4,
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
    });
</script>
@endpush