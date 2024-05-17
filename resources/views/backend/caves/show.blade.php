@extends('admin.layouts.layout')

@section('title')
   Castle Information
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Castle Information</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <a href="{{ route('castles.index') }}" class="btn btn-primary">Back</a>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>Arman:</th>
                            <td>{{ $arman->name }}</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{ $data->description }}</td>
                        </tr>
                        <tr>
                            <th>Location:</th>
                            <td>{{ $data->location }}</td>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <td>{{ $data->date }}</td>
                        </tr>
                        <tr>
                            <th>Image:</th>
                            <td>
                                <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" style="width: 300px; height: auto;" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection











@extends('admin.layouts.layout')
@section('title')
   info
@endsection
@section('content')

    <div class="jumbotron text-center">
        <div  style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
            <a href="{{ route('castles.index') }}" class="btn btn-primary">  back </a>
        </div>
        <br />
        <h3>Arman: {{ $arman->name }}</h3> <!-- عرض اسم الـ Arman -->
        <h3> Name : {{ $data->name }} </h3>
        <h3>description : {{ $data->description }}</h3>
        <h3>location : {{ $data->location }}</h3>
        <h3>date : {{ $data->date }} </h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
    </div>

@endsection

