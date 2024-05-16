@extends('admin.layouts.layout')
@section('title')
   info
@endsection
@section('content')

    <div class="jumbotron text-center">
        <div  style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
            <a href="{{ route('arman.index') }}" class="btn btn-primary">  back </a>
        </div>
        <br />

        <h3> Name : {{ $data->name }} </h3>
        <h3>description : {{ $data->description }}</h3>
        <h3>location : {{ $data->location }}</h3>
        <h3>airport : {{ $data->airport }} </h3>

        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />


    </div>

@endsection
