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
    <section class="pt30">
        <div class="container">
            <section class="row mb15">
                <div class="col-md-6">
                    <h2>Games on sale</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Game</th>
                                <th>Condition</th>
                                <th class="text-right">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->game()->title }}</td>
                                <td>{{ $product->condition()->name }}</td>
                                <td class="text-right">{{ $product->price() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h2>Your offers</h2>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Game</th>
                            <th>Condition</th>
                            <th>Status</th>
                            <th class="text-right">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($offers as $offer)
                        <tr>
                            <td>{{ $offer->product()->game()->title }}</td>
                            <td>{{ $offer->product()->condition()->name }}</td>
                            <td>{{ $offer->status()->name }}</td>
                            <td class="text-right">{{ $offer->price }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </section>
</section>

@stop
