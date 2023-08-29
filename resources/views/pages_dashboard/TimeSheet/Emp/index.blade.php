@extends('layouts.master')
@section('title')
    لوحة التحكم - التايم شيت
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        لوحة التحكم - التايم شيت
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
{{--                                <a href="{{route('products.create')}}" class="btn btn-success btn-sm" role="button"--}}
{{--                                   aria-pressed="true">Add Product</a><br><br>--}}
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>project</th>
                                            <th>task</th>
                                            <th>cost_type</th>
                                            <th>code_of_account</th>
                                            <th>Activity_location</th>
                                            <th>type</th>
                                            <th>days</th>
                                            <th>total</th>
                                            <th>shift</th>
                                            <th>Additional Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($Tasks as $Task)
                                            <tr>
                                                    <?php $i++; ?>
                                                <td>{{ $i }}</td>
                                                <td>{{$Task->project}}</td>
                                                <td>{{$Task->task}}</td>
                                                <td>{{$Task->cost_type}}</td>
                                                <td>{{$Task->code_of_account}}</td>
                                                <td>{{$Task->Activity_location}}</td>
                                                <td>{{$Task->type}}</td>
                                                <td>{{$Task->days}}</td>
                                                <td>{{$Task->total}}</td>
                                                <td>{{$Task->shift}}</td>
                                                <td>
                                                    <a href="{{route('emp.add', $Task->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
{{--                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Teacher" title="Delete"><i class="fa fa-trash"></i></button>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection

