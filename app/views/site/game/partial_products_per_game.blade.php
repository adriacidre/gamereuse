@foreach ($products as $product)
<div class="row">
    <div class="col-md-12">
        <h4>{{ $product->condition()->name }} Game</h4>
        <div class="row">
            <div class="col-md-7">
                <h4 class="no-margin-bottom">{{{ $product->price() }}} coins</h4>
                sold by <a href="{{{ $product->user()->url() }}}">{{{ $product->user()->username }}}</a> <br />
            </div>
            <div class="col-md-5 text-right">
                <button type="button" class="btn btn-info btn-buy" data-toggle="modal" data-target="#buy" data-product-id="{{ $product->id }}">{{ Lang::get('Make an offer') }}</button>
            </div>
        </div>
    </div>
</div>
<hr />
@endforeach
