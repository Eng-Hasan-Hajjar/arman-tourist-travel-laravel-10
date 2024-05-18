<!-- resources/views/reservations/show.blade.php -->

@extends('admin.layouts.layout')

@section('title')
detailes
@endsection

@section('header')
    {{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container hcontainer">
        <div class="card hcard">
            <div class="card-header"> detailes </div>

            <div class="card-body hcard-body">
                <!-- تفاصيل الحجز -->

                <p><strong> user:</strong> {{ $reservation->user->name }}</p>
                <p><strong>start date :</strong> {{ $reservation->start_date }}</p>
                <p><strong>end date :</strong> {{ $reservation->end_date }}</p>

                <!-- أزرار التحكم -->
                <div class="btn-group">
                    <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-primary"> edit </a>

                    <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')"> del </button>
                    </form>
                    <a href="{{ url('/adminpanel/reservations') }}" class="btn btn-secondary"> reservation </a>

                </div>
            </div>
        </div>
    </div>
@endsection
