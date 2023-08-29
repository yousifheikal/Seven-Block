@extends('layouts.master')
@section('title')
    لوحة التحكم - التايم شيت

@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->

    <!-- breadcrumb -->
@endsection
@section('PageTitle')
    لوحة التحكم - التايم شيت
@stop
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
{{--                    <h6 style="color: red;font-family: Cairo">{{trans('Students_trans.add_Graduate')}}</h6><br>--}}

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{route('store.emp')}}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$time->id}}">
                        <input type="hidden" name="project" value="{{$time->project}}">
                        <input type="hidden" name="task" value="{{$time->task}}">
                        <input type="hidden" name="cost_type" value="{{$time->cost_type}}">
                        <input type="hidden" name="code_of_account" value="{{$time->code_of_account}}">
                        <input type="hidden" name="Activity_location" value="{{$time->Activity_location}}">
                        <input type="hidden" name="type" value="{{$time->type}}">
                        <div class="form-row">

                            <div class="col">
                                <label for="title">Day :</label>
                                <input type="date" name="days" class="form-control" value="{{$time->days}}">
                                @error('days')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="title">Total Hour :</label>
                                <input type="number" name="total" class="form-control" {{$time->total}}>
                                @error('total')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputCity">Shift</label>
                                <input type="text" name="shift"  class="form-control" {{$time->shift}}>
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection

