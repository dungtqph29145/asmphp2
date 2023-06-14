@extends('layout.main')
@section('content')
    <table class="table table-bordered border-primary">
        <a href="{{BASE_URL}}add-user" class="btn btn-success">Add</a>
        <thead>
            <tr>
                <td>Id</td>
                <td>Tên</td>
                <td>Email</td>
                <td>Tuổi</td>
                <td>Section</td>
            </tr>
        </thead>
        @foreach ($user as $us)
        <tbody>
            <td>{{$us->id}}</td>
            <td>{{$us->userName}}</td>
            <td>{{$us->email}}</td>
            <td>{{$us->age}}</td>
            <td>
                <a href="{{BASE_URL}}detail-user/{{$us->id}}" class="btn btn-danger">Edit</a>
                <a href="{{BASE_URL}}delete-user/{{$us->id}}" onclick="confirm('bạn có chắc chắn muốn xóa không')" class="btn btn-warning">Delete</a>
            </td>
        </tbody>
           
        @endforeach
    </table>
@endsection