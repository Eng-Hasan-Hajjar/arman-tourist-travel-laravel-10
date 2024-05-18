<!-- resources/views/reservations/create.blade.php -->

@extends('admin.layouts.layout')

@section('title')
create new
@endsection

@section('header')
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container helement">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header "> create new  </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <div class="card-body ">
                        <div class="form-group">
                            <label for="user_id"> name </label>
                            <input type="text" name="user_name" class="form-control" id="user_name" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <form method="POST" action="{{ route('reservations.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="user_id">no user </label>
                                <input type="text" name="user_id" class="form-control" id="user_id" value="{{ Auth::user()->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="start_date"> start date </label>
                                <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date') }}">
                            </div>
                            <div class="form-group">
                                <label for="end_date"> end date </label>
                                <input type="date" name="end_date" class="form-control" id="end_date" value="{{ old('end_date') }}">
                            </div>
                            <button type="submit" class="btn btn-primary"> reserve </button>
                                <!-- زر الرجوع -->
                                <a href="{{ url('/adminpanel/reservations') }}" class="btn btn-secondary" >  reservations</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

@endsection
