@extends('site.layouts.default')

{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => 'Last games on sale' ])
<section id="content">

    @include('site/game/partial_list', [ 'games' => $games ])
    @include('site/home/services')

</section>
@stop
