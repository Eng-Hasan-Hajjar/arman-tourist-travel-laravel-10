
<div class="form-group">
    <label for="name"> name  </label>
    <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" >
</div>
<div class="form-group">
    <label for="description"> description :  </label>
    <input type="text" name="description" class="form-control" id="description" value="{{$data->description}}">
</div>
<div class="form-group">
    <label for="location"> location:  </label>
    <input type="text" name="location" class="form-control" id="location" value="{{$data->location}}">
</div>
<div class="form-group">
    <label for="airport">airport :   </label>
    <input type="text" name="airport" class="form-control" id="airport" value="{{$data->airport}}">
</div>

<div class="form-group">
    <label for="image" class="col-md-4 col-form-label text-md-left"> images: </label>
    <div class="col-md-12">
        <div style="margin-left:30%;padding:20px">
            @if (isset($data))
                @if ($data->image != '')
                    <img src="{{ Request::root() . '/images/' . $data->image }}"
                    style="width: 50%;high:50%"
                         />
                    <br>
                @endif
            @endif
            {!! Form::file('image', null, ['class' => 'form-control', 'style' => '']) !!}

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>

<!-- Submit Button -->
<div class="form-group"style="padding:50px">
    <div class="col-lg-10 col-lg-offset-2"style="margin-left:80%;">
        {!! Form::submit('save', ['class' => 'btn btn-primary  pull-right']) !!}
        <a href="{{ url('/adminpanel/arman') }}" class="btn btn-secondary" >   main regions  </a>
    </div>
</div>
