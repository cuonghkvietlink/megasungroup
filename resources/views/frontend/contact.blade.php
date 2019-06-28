@extends('frontend.layouts.master')
@section('content')
    <section class="page page-contact">
        <main class="container">
            <h1>Thông tin liên hệ</h1>

            <div class="row">
                <div class="col-md-4" style="padding-right: 0;">
                    <div class="head-office">
                        <h2>Liên hệ MEGASUN GROUP</h2>
                        {!! setting('site.contact') !!}
                    </div>
                </div>
                <div class="col-md-8" style="padding-left: 0;">
                    <div class="offices">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </main>
    </section>
@stop