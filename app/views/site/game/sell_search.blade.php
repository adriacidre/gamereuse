@extends('site.layouts.default')

@section('title')
{{{ String::title(Lang::get('Sell your used games')) }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => 'Sell your used games' ])
<section id="content">
    <section class="pt30">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-lg-offset-2 big-search-box-parent">
                    <input type="text" class="form-control big-search-box search_box"  placeholder="Game to sell">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb40 mt30">
                    <hr class="lineLines">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <article class="iconBlocHeading">
                        <i class="icon-thumbs-up iconRounded"></i>
                        <h2>Search your Game</h2>

                        <p>Search the game you want to sell.</p>

                    </article>
                </div>
                <div class="col-md-4">
                    <article class="iconBlocHeading">
                        <i class="icon-cog iconRounded"></i>
                        <h2></h2>
                        <p>Nullam sed tortor odio. Suspendisse tincidunt dictum nisi.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="iconBlocHeading">
                        <i class="icon-th-large iconRounded"></i>
                        <h2>Fully responsive</h2>
                        <p>Nullam sed tortor odio. Suspendisse tincidunt dictum nisi.</p>
                    </article>
                </div>
            </div>

            <br /><br />
        </div>
    </div>
</section>
@stop