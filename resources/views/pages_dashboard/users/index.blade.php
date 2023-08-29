@extends('layouts.master')

@section('title')
    لوحة التحكم - المستخدمين
@stop

@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0"> </h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><h4>Dashboard</h4></li>
<li class="breadcrumb-item active">Users</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

<!-- row -->
<div class="row">

@if ($errors->any())
<div class="error">{{ $errors->first('Name') }}</div>
@endif


<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
    Add User
</button>
<br><br>

<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
           style="text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>E-mail</th>
            <th>Type of user</th>
=            <th>Code</th>
            <th>Processes</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($users as $user)
            <tr>
                    <?php $i++; ?>
                <td>{{ $i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->utype}}</td>
                <td>{{ $user->code}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                            data-target="#edit{{ $user->id }}"
                            title=""><i class="fa fa-edit"></i></button>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#delete{{ $user->id }}"
                            title=""><i
                            class="fa fa-trash"></i></button>
                </td>
            </tr>

            <!-- edit_modal_Grade -->
            <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                id="exampleModalLabel">
                                Edit
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- add_form to update-->
                            <form action="{{route('users.update', $user->id)}}" method="post">
                                @method("PATCH")
                                @csrf
                                <div class="row">

                                    <div class="col">
                                        <label for="Name"
                                               class="mr-sm-2">
                                            Name :</label>
                                        <input type="text" class="form-control"
                                               value="{{$user->name}}"
                                               name="name" >
                                    </div>

                                    <div class="col">
                                        <label for="email"
                                               class="mr-sm-2">
                                            E-mail:</label>
                                        <input id="email" type="email" name="email"
                                               class="form-control"
                                               value="{{$user->email}}"
                                               required>
                                        <input id="id" type="hidden" name="id" class="form-control"
                                               value="{{$user->id}}">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">

                                        <label for="password" class="mr-sm-2">Password
                                            :</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">

                                        <label for="password" class="mr-sm-2">Code
                                            :</label>
                                        <input type="number" class="form-control" name="code" value="{{$user->code}}">
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="utype">Type of user : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="utype">
                                            <option selected disabled>{{$user->utype}}</option>
                                            <option  value="USR">USR</option>
                                            <option  value="EMP">EMP</option>
                                            <option  value="ADM">ADM</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    <button type="submit"
                                            class="btn btn-success">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- delete_modal_Grade -->
            <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                id="exampleModalLabel">
                                Delete {{$user->name}}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input id="id" type="hidden" name="id" class="form-control"
                                       value="">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">close</button>
                                    <button type="submit"
                                            class="btn btn-danger">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
</div>





<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- add_form -->
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> Name
                                :</label>
                            <input id="Name" type="text" name="name" class="form-control" >
                        </div>

                        <div class="col">
                            <label for="email" class="mr-sm-2">E-mail
                                :</label>
                            <label>
                                <input type="email" class="form-control" name="email" >
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            <label for="password" class="mr-sm-2">Password
                                :</label>
                                <input type="password" class="form-control" name="password" >
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">

                            <label for="password" class="mr-sm-2">Code
                                :</label>
                            <input type="number" class="form-control" name="code" >
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="utype">Type of user : <span class="text-danger">*</span></label>
                        <select class="custom-select mr-sm-2" name="utype">
                            <option selected disabled>Choose...</option>
                            <option  value="USR">USR</option>
                            <option  value="EMP">EMP</option>
                            <option  value="ADM">ADM</option>
                        </select>
                    </div>

                    <br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </form>

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

