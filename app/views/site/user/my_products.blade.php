@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title('My on sale games') }}} ::
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
@include('site/shared/header', [ 'headerTitle' => 'My "on sale" games' ])
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
                        <th class="col-lg-2">Price</th>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ HTML::image($product->game()->image, $product->game()->title, [ 'class' => 'imgBorder imgListing' ]) }}
                            </td>
                            <td>
                                <h3>{{ $product->game()->title }}</h3>
                                {{ $product->description }}
                            </td>
                            <td>{{ $product->condition()->name }}</td>
                            <td>{{ $product->price() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>
@stop
