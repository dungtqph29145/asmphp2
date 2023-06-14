@extends('layout.main')
@section('content')
    {{-- @if (isset($_SESSION['errors'])&& isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li style="color: red">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif --}}
    @if (isset($_SESSION['success'])&& isset($_GET['msg']))
        <span style="color: green">{{$_SESSION['success']}}</span>
    @endif
    <div class="container mt-3">
        <form action="{{ BASE_URL }}edit-category/{{$category->id}}" method="post">

            <label for="">Tên danh mục</label>
            <input type="text" name="categoryName" value="{{$category->categoryName}}" class="form-control">

            <label for="">Chú Thích</label>
            <input type="text" name="categoryDsc" value="{{$category->categoryDsc}}" class="form-control">

            <input type="submit" name="submit" value="Thêm" class="btn btn-success mt-3">
        </form>
    </div>

@endsection
