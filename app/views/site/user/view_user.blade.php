@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($user->username) }}} ::
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
@include('site/shared/header', [ 'headerTitle' => $user->username ])

<section id="content">
    <!-- news -->
    <section class="pt30">
        <div class="container">
            <div class="row">
                <a id="posts"></a>
                <h4>{{{ $products->count() }}} used games on sale</h4>

                @if ($products->count())
                @foreach ($products as $product)
                <div class="row">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-11">
                                <strong>Excelent {{ $product->game()->title }}</strong> for <strong>{{{ $product->price() }}} coins</strong> <br />
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                @endforeach
            </div>

            <div class="row">
                <div class="col-xs-4">
                </div>
            </div>
            @else
            <hr />
            @endif

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
