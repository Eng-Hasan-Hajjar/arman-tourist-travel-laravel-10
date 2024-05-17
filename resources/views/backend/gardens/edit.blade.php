@extends('admin.layouts.layout')

@section('title')
       edit
@endsection
@section('header')
{{ Html::style('hdesign/hstyle.css') }}

{!! Html::style('cus/css/select2.css') !!}


@endsection
@section('content')
    <div class="container helementedit" >
        <div class="card " style="margin-top:2%;">
            <div class="card-header"> edit </div>

            <div class="card-body" style="margin-left:20%;width: 70%;" >
                <form  method="post" action="{{ route('gardens.update', $id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    @include('backend.gardens.formEdit')

                </form>
            </div>
        </div>
    </div>
@endsection




@section('footer')


 {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">

    $('.select2').select2();

  </script>

@endsection
