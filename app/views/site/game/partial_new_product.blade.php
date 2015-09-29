<form class="form-horizontal" method="POST" action="{{ $game->sellUrl() }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="gameId" value="{{ $game->id }}">
    <fieldset>
        <div class="form-group">
            <label class="col-md-6 control-label" for="price">{{ Lang::get('Price') }}</label>
            <div class="col-md-6">
                <input class="form-control" tabindex="1" placeholder="{{ Lang::get("10,00") }}" type="text" name="price" id="price" value="{{ Input::old('price') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-6 control-label" for="conditions">{{ Lang::get('Conditions') }}</label>
            <div class="col-md-6">
                <select id="condition" name="condition" class="form-control">
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <textarea id="description" name="description" class="form-control" placeholder="General description"></textarea>
            </div>
        </div>

        @if ( Session::get('error') )
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-group sell-button-container">
            <div class="col-md-offset-6 col-md-6">
                <button tabindex="3" type="submit" class="btn btn-primary">
                    {{ Lang::get('Sell my game') }}
                </button>
            </div>
        </div>
    </fieldset>
</form>
