@extends('layout.main')
@section('content')
    <table class="table table-bordered border-primary">
        <a href="{{BASE_URL}}add-category" class="btn btn-success">Add</a>
        <thead>
            <tr>
                <td>Id</td>
                <td>Tên danh mục</td>
                <td>Chú thích</td>
                <td>Section</td>
            </tr>
        </thead>
        @foreach($category as $cate)
            <tbody>
                <td>{{$cate->id}}</td>
                <td>{{$cate->categoryName}}</td>
                <td>{{$cate->categoryDsc}}</td>
                <td>
                    <a href="{{BASE_URL}}detail-category/{{$cate->id}}" class="btn btn-danger">Edit</a>
                    <a href="{{BASE_URL}}delete-category/{{$cate->id}}" onclick="confirm('bạn có chắc chắn muốn xóa không ?')" class="btn btn-warning">Delete</a>
                </td>
            </tbody>
        @endforeach
    </table>
@endsection