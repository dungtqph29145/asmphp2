@extends('layout.main');
@section('content')
    <table class="table table-bordered border-primary" >
        <a href="{{BASE_URL}}add-student" class="btn btn-success">Add</a>
        <thead>
            <tr>
                <td>Id</td>
                <td>Mssv</td>
                <td>TenSV</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Section</td>
            </tr>
        </thead>
        @foreach ($student as $st)
            <tbody>
                <td>{{$st->id}}</td>
                <td>{{$st->mssv}}</td>
                <td>{{$st->name}}</td>
                <td>{{$st->email}}</td>
                <td>{{$st->phone}}</td>
                <td>
                    <a href="{{BASE_URL}}detail-student/{{$st->id}}" class="btn btn-danger">Edit</a>
                    <a href="{{BASE_URL}}delete-student/{{$st->id}}" onclick="confirm('bạn có chắc chăn muốn xóa không ?')" class="btn btn-warning">Delete</a>
                </td>
            </tbody>
        @endforeach
    </table>
@endsection