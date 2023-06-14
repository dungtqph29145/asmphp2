@extends('layout.main');
@section('content')
    @if (isset($_SESSION['errors'])&& isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $error)
            <li style="color: red">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success'])&& isset($_GET['msg']))
        <span style="color: green">{{$_SESSION['success']}}</span>
    @endif
<div class="container mt-3">
    <form action="{{ BASE_URL }}post-student" method="post">

        <label for="">MSSV</label>
        <input type="text" name="mssv" class="form-control">

        <label for="">Tên Sinh Viên</label>
        <input type="text" name="name" class="form-control">

        <label for="">Email</label>
        <input type="text" name="email" class="form-control">

        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control">

        <input type="submit" name="submit" value="Thêm" class="btn btn-success mt-3">
    </form>
</div>
@endsection