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


                <div class="container hcontainer"  >
                    <div class="card hcard helement hcard-body" >

                        <div class="card-header"><p  class="float-left">all main region </p></div>
                        <div class="card-header">
                            <a href="{{ route('arman.create') }}" class=" btn btn-success float-right">create new </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="data" class="table table-bordered table-hover">
                                <thead>

                                    <tr>

                                        <th>name</th>
                                        <th>description</th>
                                        <th>location</th>
                                        <th>airport</th>


                                        <th>image</th>


                                        <th>control</th>
                                        <th>del</th>
                                    </tr>
                                </thead>



                                <tbody>


                                    @foreach ($armans as $row)
                                        <tr>

                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->location }}</td>
                                            <td>{{ $row->airport }}</td>

                                            <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}"
                                                    class="img-thumbnail" width="75" />
                                            </td>
                                            <td>
                                                <a href="{{ route('arman.show', $row->id) }}"
                                                    class="btn btn-primary">Show</a>
                                                <a href="{{ route('arman.edit', $row->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>

                                            <td>

                                                <form method="post" class="delete_form"
                                                    action="{{ route('arman.destroy', $row->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>


                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->


@endsection

@section('footer')
    <!-- DataTables -->
    {{ Html::script('admin/plugins/datatables/jquery.dataTables.min.js') }}
    {{ Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}
    {{ Html::script('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}
    {{ Html::script('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}
@endsection
