<!-- resources/views/reservations/create.blade.php -->

@extends('admin.layouts.layout')

@section('title')
 create
@endsection

@section('header')

{!! Html::style('cus/css/select2.css') !!}
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container helement" >
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card " style="margin-top:2%;">
                    <div class="card-header "> create new </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <div class="card-body "style="margin-left:20%;width: 70%;">
                        {!! Form::open(['url' => '/adminpanel/arman', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!}
                           @include('backend.arman.formAdd')
                        {!! Form::close()  !!}
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







@section('footer')

  {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">

    $('.select2').select2();

  </script>
@endsection
