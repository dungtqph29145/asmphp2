@extends('layout.main')
@section('content')
<div class="container mt-3">
    @if (isset($_SESSION['success'])&& isset($_GET['msg']))
    <span style="color:green">{{$_SESSION['success']}}</span>
    @endif
    <form action="{{BASE_URL}}edit-product/{{$products->id}}" method="post">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="ten_sp" value="{{$products->tenSP}}" class="form-control">

        <label for="">Gía</label>
        <input type="text" name="gia_sp" value="{{$products->gia}}" class="form-control">



        <input type="submit" name="nut" value="Sửa" class="btn btn-success mt-3">
      
    </form>
    
    
</div>
@endsection