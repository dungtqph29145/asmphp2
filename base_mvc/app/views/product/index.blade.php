@extends('layout.main')
@section('content')
<table class="table table-bordered border-primary">
    <a href="{{BASE_URL}}add-product" class="btn btn-success">Add</a>
    <thead>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Gía</td>
        <td>Section</td>
    </tr>
    </thead>
    @foreach($products as $iteam)
    <tbody>
            <td>{{$iteam->id}}</td>
            <td>{{$iteam->tenSP}}</td>
            <td>{{$iteam->gia}}</td>
            <td>
                <a href="{{BASE_URL}}detail-product/{{$iteam->id}}" class="btn btn-danger">Edit</a>
                <a href="{{BASE_URL}}delete-product/{{$iteam->id}}" class="btn btn-warning" onclick="confirm('Bạn có chắc chắn muốn xóa không')" >Delete</a>
            </td>
        
    </tbody>
    @endforeach
  
</table>
@endsection
