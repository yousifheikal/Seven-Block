@extends('layouts.master')
@section('title')
    لوحة التحكم - المنتجات
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        لوحة التحكم - المنتجات
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
                                <a href="{{route('products.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">Add Product</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Regular-Price</th>
                                            <th>Sale-Price</th>
                                            <th>Stock-Status</th>
                                            <th>Image</th>
                                            <th>Process</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($products as $product)
                                            <tr>
                                                    <?php $i++; ?>
                                                <td>{{ $i }}</td>
                                                <td>{{$product->user}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->Category->name}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->regular_price}}</td>
                                                <td>{{$product->sale_price}}</td>
                                                <td>{{$product->stock_status}}</td>
                                                <td>{{$product->image}}</td>
                                                <td>
                                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Teacher{{ $product->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Teacher{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{{$product->name}}</p>
                                                                <input type="hidden" name="id"  value="{{$product->id}}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">close</button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger">submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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

