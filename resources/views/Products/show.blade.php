@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Show Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{$product->category}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{$product->name}}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{$product->detail}}

                <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-success">Create New Products</a>
            </div>
                </div>
                </div>
                </div>
                
                
            </div>
        </div>
    </div>
@endsection