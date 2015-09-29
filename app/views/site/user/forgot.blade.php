@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.forgot_password') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
@include('site/shared/header', [ 'headerTitle' => Lang::get('user/user.forgot_password') ])
<section id="content" class="front-form">
    <section class="pt30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    {{ Confide::makeForgotPasswordForm() }}
                </div>
            </div>
        </div>
    </section>
</section>
@stop

