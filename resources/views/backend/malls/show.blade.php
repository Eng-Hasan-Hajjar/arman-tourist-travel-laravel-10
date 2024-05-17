@extends('admin.layouts.layout')

@section('title')
mall Information
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>mall Information</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <a href="{{ route('malls.index') }}" class="btn btn-primary">Back</a>
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












