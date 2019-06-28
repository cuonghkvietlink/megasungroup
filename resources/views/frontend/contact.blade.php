@extends('frontend.layouts.master')
@section('content')
    <section class="page page-contact">
        <main class="container">
            <h1>GET IN TOUCH</h1>

            <div class="row">
                <div class="col-md-4" style="padding-right: 0;">
                    <div class="head-office">
                        <h2>Corporate head office</h2>
                        <p>{!! $page->content !!}</p>
                    </div>
                </div>
                <div class="col-md-8" style="padding-left: 0;">
                    <div class="offices">
                        Australia
                        Unit 1 / 102 Bath Road
                        Kirrawee, NSW 2232
                        Herbs of Gold
                        Phone +61 (2) 9545 2633
                        Toll free in Australia 1800 852 222
                        info@herbsofgold.com.au
                        VitaScience
                        Phone +61 (2) 9545 2633
                        Toll free in Australia 1800 852 222
                        info@vitascience.com.au
                    </div>
                </div>
            </div>
        </main>
    </section>
@stop