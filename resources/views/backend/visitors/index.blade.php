<!-- resources/views/reservations/all.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    control
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container hcontainer">
        <div class="card hcard helement hcard-body">
            <div class="card-header  "><p  class="float-left"> all  </p></div>
            <div class="card-header">
                <a href="{{ route('visitors.create') }}" class=" btn btn-success float-right"> create new  </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> name </th>
                            <th> phon </th>

                            <th> work </th>
                            <th> hobi </th>
                            <th>  nationality</th>
                            <th> current location  </th>

                            <th> gender </th>
                            <th> companion  </th>

                            <th> birth date </th>


                            <th>control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitors as $visitor)
                            <tr>
                                <td>
                                    @foreach ($users as $user)
                                        @if($user->id == $visitor->user_id)  {{ $user->name }} @endif
                                    @endforeach
                                </td>
                                <td>{{ $visitor->phone }}</td>
                                <td>{{ $visitor->work }}</td>
                                <td>{{ $visitor->hobby }}</td>
                                <td>{{ $visitor->nationality }}</td>
                                <td>{{ $visitor->current_location }}</td>

                                <td>
                                    @if($visitor->gender == 0) male  @else female @endif

                                </td>
                                <td>{{ $visitor->num_companion }}</td>

                                <td>{{ $visitor->birthday }}</td>

                                <td>
                                    <div class="">
                                        <a style="margin: 10px" href="{{ route('visitors.show', $visitor) }}" class="btn btn-info"> detail </a>
                                        <br>
                                        <a style="margin: 10px" href="{{ route('visitors.edit', $visitor) }}" class="btn btn-primary"> edit </a>
                                        <br>
                                        <a style="margin-left: 30px">
                                        <form action="{{ route('visitors.destroy', $visitor) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الزائر؟ ')"> del </button>
                                        </form>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
