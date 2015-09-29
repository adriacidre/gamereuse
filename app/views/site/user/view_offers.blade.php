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
@include('site/shared/header', [ 'headerTitle' => Lang::get('My Offers') ])
<section id="content">
    <!-- news -->
    <section class="pt30">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                    <th class="col-lg-2">Image</th>
                    <th class="col-lg-6">Name</th>
                    <th class="col-lg-2">Condition</th>
                    <th class="col-lg-2">You're offering</th>
                    </thead>
                    <tbody>
                    @foreach ($offers as $offer)
                    <tr>
                        <td>
                            {{ HTML::image($offer->product()->game()->image, $offer->product()->game()->title, [ 'class' => 'imgBorder imgListing' ]) }}
                        </td>
                        <td>
                            <h3>{{ $offer->product()->game()->title }}</h3>
                            {{ $offer->product()->description }}
                        </td>
                        <td>{{ $offer->product()->condition()->name }}</td>
                        <td>{{ $offer->product()->price() }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>
@stop
