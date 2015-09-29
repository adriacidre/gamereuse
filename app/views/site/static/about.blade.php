@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
About us :: Game Reuse
@stop


{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => 'About us' ])

<section id="content">
    <section id="aboutUs" class="pt30 pb30 color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('assets/images/us.jpg') }}" width="100%" />
                </div>
                <div class="col-sm-6">
                    <h2>Our mission:</h2>
                    <h3>
                        GameReuse is a marketplace to allow people easy share it's passion for video games.
                    </h3>
                    <p>
                        We want to provide the best tools for every video game lover to share his passion.
                        Because of this we're focused into connect you with people like you, and create a unique space to connect.
                    </p>
                    <div class="row mb15">
                        <div class="col-sm-6">
                            <ul class="iconList list-unstyled borderList">
                                <li>Sell video games</li>
                                <li>Buy used video games</li>
                                <li>Video games wish lists</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="iconList list-unstyled borderList">
                                <li>Your online video game collection</li>
                                <li>Connect people</li>
                                <li>Content alerts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="mt15 internalLink">
        <div class="container">
            <div class="row">
                <div class="span12 text-center mb40">
                    <h1>Our team</h1>
                    <h2 class="subTitle">We're smart, we are focused, we are proud </h2>
                </div>

                <section class="col-md-8 col-md-offset-2">
                    <div class="row mb15">
                        <div class="col-sm-6">
                            <article>
                                <div><img src="{{ asset('assets/images/team/sergi.png') }}" alt="" class="img-responsive"></div>
                                <div class="boxContent color0 text-center">
                                    <h3>Sergio Piñar</h3>
                                    <p>Executive Director</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <article>
                                <div><img src="{{ asset('assets/images/team/adria.png') }}" alt="" class="img-responsive"></div>
                                <div class="boxContent color0 text-center">
                                    <h3>Adrià Cidre</h3>
                                    <p>Engineer</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </section>
</section>
@stop
