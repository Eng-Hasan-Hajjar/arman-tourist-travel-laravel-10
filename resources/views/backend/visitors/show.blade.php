<!-- resources/views/reservations/show.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    تفاصيل
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
            <div class="card-header"> detail  </div>

            <div class="card-body hcard-body">
                <!-- تفاصيل  -->
                <p><strong> name :</strong>  @foreach ($users as $user)
                    @if($user->id == $visitor->user_id)  {{ $user->name }} @endif
                @endforeach</p>
                <p><strong> phone :</strong> {{ $visitor->phone}}</p>
                <p><strong> work :</strong> {{  $visitor->work}}</p>
                <p><strong> hoby:</strong> {{ $visitor->hobby}}</p>
                <p><strong> nationality:</strong> {{ $visitor->nationality}}</p>
                <p><strong> current location :</strong> {{ $visitor->current_location}}</p>
                <p><strong> gender:</strong>   @if($visitor->gender == 0) male @else female @endif</p>
                <p><strong> num companion :</strong> {{ $visitor->num_companion}}</p>
                <p><strong>  is_phobia_dark:</strong> @if($visitor->is_phobia_dark == 0) not have @else have @endif</p>
                <p><strong> is_phobia_animals:</strong>  @if($visitor->is_phobia_animals == 0) not have @else have @endif</p>
                <p><strong> is_phobia_fly :</strong>   @if($visitor->is_phobia_fly == 0) not have @else have @endif</p>
                <p><strong> is_phobia_see :</strong>  @if($visitor->is_phobia_see == 0) not have @else have @endif</p>
                <p><strong> is_phobia_open_space  :</strong> @if($visitor->is_phobia_open_space == 0) not have @else have @endif</p>
                <p><strong> is_phobia_hights :</strong>  @if($visitor->is_phobia_hights == 0) not have @else have @endif</p>
                <p><strong> birthday :</strong> {{ $visitor->birthday }}</p>

                <div class="btn-group">
                    <a href="{{ route('visitors.edit', $visitor) }}" class="btn btn-primary">edit</a>
                    <form action="{{ route('visitors.destroy', $visitor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الزائر؟ ')"> del </button>
                    </form>
                    <a href="{{ url('/adminpanel/visitors') }}" class="btn btn-secondary">visitors </a>

                </div>






            </div>
        </div>
    </div>
@endsection























