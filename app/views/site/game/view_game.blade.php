@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title(Lang::get('Buy used') . ' ' . $game->title . ' - ' . $game->platform()) }}} :: Game Reuse
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
{{{ String::title(Lang::get('Buy used') . ' ' . $game->title . ' - ' . $game->platform()) }}} ::
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
@include('site/shared/header', [ 'headerTitle' => $game->title . ' - ' . $game->platform() ])
<section id="content">
    <!-- news -->
    <section class="pt30">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <div class="big-image">
                        {{ HTML::image($game->image, $game->title, [ 'class' => 'img-responsive imgBorder mb15' ]) }}
                    </div>
                    @if (0)
                    <div>
                        <ul>
                            <li><a href="">I already have this game</a></li>
                            <li><a href="">Add to my wish list</a></li>
                            <li><a href="">I already have this game</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Who has this game?</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works1.jpg" alt="works"></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works2.jpg" alt="works"></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works3.jpg" alt="works"></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works4.jpg" alt="works"></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works5.jpg" alt="works"></a></li>
                            <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works6.jpg" alt="works"></a></li>
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col-xs-6">
                    {{ $game->content() }}
                    <hr class="lineLines">
                    @include('site/shared/disqus')
                </div>
                <div class="col-xs-3">
                    @if ($products->count())
                    <div class="tab-content">
                        @include('site/game/partial_products_per_game')
                    </div>
                    @endif
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="btn-success accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSell">
                                        <strong>{{ Lang::get('Sell my used') }} {{ $game->title }}</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSell" class="panel-collapse">
                                <div class="panel-body">
                                    @include('site/game/partial_new_product')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4">
                </div>
            </div>

            @include('site/game/partial_modal_new_offer')

            @if($errors->has())
            <div class="alert alert-danger alert-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </section>
</section>

@stop
