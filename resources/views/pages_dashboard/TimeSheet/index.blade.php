@extends('layouts.master')
@section('title')
    لوحة التحكم - اضافة المهام
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        لوحة التحكم - اضافة المهام
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('complete.tasks')}}" method="post">
                                @csrf
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">Name of Project :</label>
                                        <input type="text" name="project" class="form-control">
                                        @error('project')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title">Name of Task :</label>
                                        <input type="text" name="task" class="form-control">
                                        @error('task')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Cost Type :</label>
                                        <input type="text" name="cost" class="form-control">
                                        @error('cost')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title">Activity Location :</label>
                                        <input type="text" name="active" class="form-control">
                                        @error('active')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="inputCity">Code of Account</label>
                                        <select class="custom-select my-1 mr-sm-2" name="account">
                                            @foreach($users as $user)
                                                <option value="{{$user->name}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('account')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Type</label>
                                    <textarea class="form-control" name="type"
                                              id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @error('type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <br>

                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Submit</button>
                            </form>
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

