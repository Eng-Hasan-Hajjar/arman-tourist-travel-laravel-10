
<div class="form-group">
    {!! Form::label('arman_id', 'Arman:',['class'=>'col-md-4 col-form-label text-md-left']) !!}
    {!! Form::select('arman_id', $armans->pluck('name', 'id')->toArray(), null, ['class'=>'form-control select2', 'placeholder'=>'Select Arman']) !!}
</div>


<div class="form-group">
    <label for="name"> name : </label>
    <input type="text" name="name" class="form-control" id="name" >
</div>
<div class="form-group">
    <label for="description"> description :  </label>
    <input type="text" name="description" class="form-control" id="description">
</div>
<div class="form-group">
    <label for="location"> location:  </label>
    <input type="text" name="location" class="form-control" id="location" >
</div>
<div class="form-group">
    <label for="date"> date :   </label>
    <input type="date" name="date" class="form-control" id="date" >
</div>
<div class="form-group">
    <label for="image" class="col-md-4 col-form-label text-md-left"> image </label>
    <div class="col-md-6">
        <div style="">
            @if (isset($mountains))
                @if ($mountains->image != '')
                    <img src="{{ Request::root() . '/images/' . $mountains->image }}"
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
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2" style="margin-left:60%;">
        {!! Form::submit('save', ['class' => 'btn btn-primary  pull-right']) !!}
        <a href="{{ url('/adminpanel/mountains') }}" class="btn btn-secondary" >   Armenia mountains  </a>
    </div>
</div>
