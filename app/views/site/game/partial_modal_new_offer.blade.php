<div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="form-horizontal" method="POST" action="{{ URL::to('/product/offer') }}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="product_id" name="product_id" value="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="price">{{ Lang::get('Your offer') }}</label>
                            <div class="col-md-8">
                                <input class="form-control" tabindex="1" placeholder="{{ Lang::get("10,00") }}" type="text" name="price" id="price" value="{{ Input::old('price') }}">
                            </div>
                        </div>

                        @if ( Session::get('error') )
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if ( Session::get('notice') )
                        <div class="alert">{{ Session::get('notice') }}</div>
                        @endif
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ Lang::get('Sell my game') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
