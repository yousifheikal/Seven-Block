@extends('layouts.master')

@section('title')
    لوحة التحكم - المشاريع الخاصة
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
                    <li class="breadcrumb-item active">projects</li>
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
                        Add New project
                    </button>
                    <br><br>

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>section</th>
                                <th>client</th>
                                <th>bedroom</th>
                                <th>lounge</th>
                                <th>saloon</th>
                                <th>bathroom</th>
                                <th>external</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($projects as $project)
                                <tr>
                                        <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $project->section }}</td>
                                    <td>{{ $project->user->name }}</td>
                                    <td>
                                        <img src="{{asset('assets/images/projects')}}/{{ $project->bedroom}}" width="70px">
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/projects')}}/{{ $project->lounge}}" width="70px">

                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/projects')}}/{{ $project->saloon}}" width="70px">

                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/projects')}}/{{ $project->bathroom}}" width="70px">

                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/projects')}}/{{ $project->external}}" width="70px">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $project->id }}"
                                                title=""><i class="fa fa-edit"></i></button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $project->id }}"
                                                title=""><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="edit{{ $project->id }}" tabindex="-1" role="dialog"
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
                                                <form action="{{route('projects_customers.update', $project->id)}}" method="post">
                                                    @method("PATCH")
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label for="inputCity">Sections</label>
                                                            <select class="custom-select my-1 mr-sm-2" name="section">
                                                                <option selected disabled>Select</option>
                                                                <option value="design">Design</option>
                                                                <option value="foundation">Foundation</option>
                                                                <option value="finishing">Finishing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label for="inputCity">Users</label>
                                                            <select class="custom-select my-1 mr-sm-2" name="user_id">
                                                                <option selected disabled>{{$project->user->name}}</option>
                                                                @foreach($users as $user)
                                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <label>Bedroom</label>
                                                    <div class="input-group">
                                                        <input type="file" accept="image/*" name="bedroom" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="bedroom">
                                                    </div>
                                                    <br>

                                                    <label>Lounge</label>
                                                    <div class="input-group">
                                                        <input type="file" accept="image/*" name="lounge" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="lounge">
                                                    </div>
                                                    <br>

                                                    <label>Saloon</label>
                                                    <div class="nput-group">
                                                        <input type="file" accept="image/*" name="saloon" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="saloon">
                                                    </div>
                                                    <br>

                                                    <label>Bathroom</label>
                                                    <div class="input-group">
                                                        <input type="file" accept="image/*" name="bathroom" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="bathroom">
                                                    </div>
                                                    <br>

                                                    <label>External</label>
                                                    <div class="input-group">
                                                        <input type="file" accept="image/*" name="external" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="external">
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
                                <div class="modal fade" id="delete{{ $project->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    Delete
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('projects_customers.destroy', $project->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf

                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{$project->id}}">
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
                                    <form action="{{route('projects_customers.store')}}" method="POST" >
                                        @csrf

                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="inputCity">Sections</label>
                                                <select class="custom-select my-1 mr-sm-2" name="section">
                                                    <option selected disabled>Select</option>
                                                    <option value="design">Design</option>
                                                    <option value="foundation">Foundation</option>
                                                    <option value="finishing">Finishing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="inputCity">Users</label>
                                                <select class="custom-select my-1 mr-sm-2" name="user_id">
                                                    <option selected disabled>Users</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <label>Bedroom</label>
                                        <div class="input-group">
                                            <input type="file" accept="image/*" name="bedroom" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        </div>
                                        <br>

                                        <label>Lounge</label>
                                        <div class="input-group">
                                            <input type="file" accept="image/*" name="lounge" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="lounge">
                                        </div>
                                        <br>

                                        <label>Saloon</label>
                                        <div class="nput-group">
                                            <input type="file" accept="image/*" name="saloon" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="saloon">
                                        </div>
                                        <br>

                                        <label>Bathroom</label>
                                        <div class="input-group">
                                            <input type="file" accept="image/*" name="bathroom" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="bathroom">
                                        </div>
                                        <br>

                                        <label>External</label>
                                        <div class="input-group">
                                            <input type="file" accept="image/*" name="external" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="external">
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
    </div><!-- row closed -->
@endsection
@section('js')

@endsection



