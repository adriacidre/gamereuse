@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title(Lang::get('Buy used games ') . ' ' . $platform->title) }}} ::
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
@include('site/shared/header', [ 'headerTitle' => $platform->title ])
<section id="content">

    @include('site/game/partial_list', [ 'games' => $games ])

</section>
@stop
