@extends('layouts.master')
@section('title')
    لوحة التحكم - تعديل المنتجات
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        لوحة التحكم - تعديل المنتجات
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
                            <form action="{{route('products.update', $product->id)}}" method="post">
                                @method('PATCH')
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Name of Product :</label>
                                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title">Stock Status</label>
                                        <select class="custom-select my-1 mr-sm-2" name="stock_status">
                                            <option selected disabled>{{$product->stock_status}}</option>
                                            <option value="instock">Instock</option>
                                            <option value="outstock">Outstock</option>
                                        </select>
                                        @error('stock_status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Regular Price :</label>
                                        <input type="text" name="regular_price" class="form-control" value="{{$product->regular_price}}">
                                        @error('regular_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label for="title">Sale Price :</label>
                                        <input type="text" name="sale_price" class="form-control" value="{{$product->sale_price}}">
                                        @error('sale_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="inputCity">Categories</label>
                                        <select class="custom-select my-1 mr-sm-2" name="category_id">
                                            <option selected disabled>Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description"
                                              id="exampleFormControlTextarea1" rows="5"></textarea>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-group">
                                    <input type="file" accept="image/*" name="image" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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


