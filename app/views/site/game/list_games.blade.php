@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ String::title(Lang::get('Used games')) }}} ::
@parent
@stop


{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => 'Used games' ])
<section id="content">
    @include('site/game/partial_list', [ 'games' => $games ])
</section>
@stop