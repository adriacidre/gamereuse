@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => Lang::get('Signup') ])
<section id="content" class="front-form">
    <section class="pt30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    {{ Confide::makeSignupForm()->render() }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    Already have an account? <a href="{{ URL::to('user/login') }}">{{ Lang::get('Login') }}</a>
                </div>
            </div>
        </div>
    </section>
</section>
@stop
