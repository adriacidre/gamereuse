@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title(Lang::get('Platforms')) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop

{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => 'Buy used games for your Platform' ])
<section id="content">
    <section class="pt30">
        <div class="container">
            <div class="portfolio-items  isotopeWrapper clearfix imgHover neko-hover-1 isotope">
                @foreach ($platforms as $platform)
                <article class="col-sm-3 isotopeItem isotope-item platformItem">
                    <figure>

                        @if ($platform->hasImage())
                        <a href="{{{ $platform->url() }}}" title="{{ String::title($platform->title) }}">
                            <img alt="{{ String::title($platform->title) }}" src="{{ $platform->image }}" class="img-responsive">
                        </a>
                        @endif

                        <figcaption>
                            <ul class="pinInfo">
                                <li><a href=""><i class="icon-eye"></i>150</a></li>
                                <li><a href=""><i class="icon-comment-1"></i>4</a></li>
                                <li><a href=""><i class="icon-heart"></i>32</a></li>
                            </ul>
                            <div class="iconLinks">
                                <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture"></i></a>
                                <a href="images/portfolio/zoom6.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a>
                            </div>
                        </figcaption>
                    </figure>


                    <section class="boxContent">
                        <h3><a href="{{{ $platform->url() }}}" title="{{ String::title($platform->title) }}">{{ String::title($platform->title) }}</a></h3>
                        <p>{{ String::tidy(Str::limit($platform->content, 200)) }}</p>
                    </section>

                </article>
                @endforeach
            </div>
            <div class="row centered">
                {{ $platforms->links() }}
            </div>
            <div class="row">
                <div class="col-md-12 mb40 mt30">
                    <hr class="lineLines">
                </div>
            </div>
        </div>
    </section>
</section>
@stop
