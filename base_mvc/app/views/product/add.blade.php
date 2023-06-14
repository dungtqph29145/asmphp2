@extends('layout.main');
@section('content')
    @if(isset($_SESSION['errors'])&& isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li style="color: red">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if (isset($_SESSION['success'])&& isset($_GET['msg']))
        <span style="color:green">{{$_SESSION['success']}}</span>
    @endif
<div class="container mt-3">
    <form action="{{BASE_URL}}post-product" method="post">
    
        <label for="">Tên sản phẩm</label>
        <input type="text" name="ten_sp" class="form-control">

        <label for="">Gía</label>
        <input type="text" name="gia_sp" class="form-control">

        <input type="submit" name="nut" value="Thêm" class="btn btn-success mt-3">
    </form>
</div>
@endsection