<!-- resources/views/reservations/all.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    all reservation
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container hcontainer">
        <div class="card hcard helement hcard-body">
            <div class="card-header  "><p  class="float-left"> all reservation </p></div>
            <div class="card-header">
                <a href="{{ route('reservations.create') }}" class=" btn btn-success float-right"> create new  </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> user name :</th>

                            <th> start date </th>
                            <th> end date </th>
                            <th> control </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->user->name }}</td>



                             {{--   <td>{{ $reservation->camp_ground_id }} {{ $campground->name }}</td> --}}
                                <td>{{ $reservation->start_date }}</td>
                                <td>{{ $reservation->end_date }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-info"> show  </a>
                                        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-primary"> edit </a>
                                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')"> del </button>

                                        </form>
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
