@inject ('countries', 'App\Http\Utilities\Country')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('street', 'Street: ') }}
            {{ Form::text('street', old('street'), ['class' => 'form-control', 'id' => 'street']) }}
        </div>
        <div class="form-group">
            {{ Form::label('city', 'City: ') }}
            {{ Form::text('city', old('city'), ['class' => 'form-control', 'id' => 'city']) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Zip/Postal Code: ') }}
            {{ Form::text('zip', old('zip'), ['class' => 'form-control', 'id' => 'zip']) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'State: ') }}
            {{ Form::text('state', old('state'), ['class' => 'form-control', 'id' => 'state']) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country: ') }}
            {{ Form::select('country', $countries::all(), ['class' => 'form-control', 'id' => 'country']) }}  {{-- use injection --}}
{{--        {{ Form::select('country', App\Http\Utilities\Country::all(), ['class' => 'form-control', 'id' => 'country']) }} use path--}}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Sale Price: ') }}
            {{ Form::text('price', old('price'), ['class' => 'form-control', 'id' => 'price']) }}
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('description', 'Description: ') }}
            {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'rows' => 10]) }}
        </div>

        <div class="form-group">
            {{ Form::label('photo', 'Upload Photo: ') }}
            {{  Form::file('photo') }}
            <hr>
            {{ Form::submit('Create Flyer', ['class' => 'btn btn-primary']) }}
        </div>
    </div>

</div>