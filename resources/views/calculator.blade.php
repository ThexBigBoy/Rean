
@extends('layout.master')
@section('content')

<h1>Calculator</h1>
    <hr>
    <form action="{{url('calculator/cal')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group row" style="padding: 5px;">
                    <label for="pname" class="col-sm-2">Product Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="pname" name='pname'>
                    </div>
                </div>
                <div class="form-group row" style="padding: 5px;">
                    <label for="price" class="col-sm-2">Price:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="price" name='price'>
                    </div>
                </div>
                <div class="form-group row" style="padding: 5px;">
                    <label for="qty" class="col-sm-2">Quantity:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="qty" name='qty'>
                    </div>
                </div>
                <div class="form-group row" style="padding: 5px;">
                    <label for="total" class="col-sm-2">Total:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="total"
                             disabled value="{{$total}}">
                    </div>  
                </div>
                <div class="form-group row" style="padding: 5px;">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>  
                </div>
            </div>
        </div>
    </form>

@endsection