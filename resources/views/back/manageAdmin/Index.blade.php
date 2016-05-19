@extends('layout.back')
@section('title', 'Quản lý admin')
@section('backContent')
    <div class="col-sm-offset-2 col-md-10 container">
        <div class="row mt20 mb20">
        <form action="" method="get" class="form-inline col-sm-offset-3 col-md-9">
            <div class="form-group col-md-5">
                <input type="text" class="form-control width100" placeholder="Tìm kiếm admin">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{url('/Admin/Add')}}" class="btn btn-success">Thêm mới</a>
        </form>
        </div>
        <div class="row"></div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
                <tr>
                    <th scope="row">{!! $admin->id !!}</th>
                    <td>{!! $admin->username !!}</td>
                    <td><a href="{{url('/Admin/Edit')}}/{{$admin->id}}">Sửa</a></td>
                    <td><a href="{{url('/Admin/Delete')}}/{{$admin->id}}">Xóa</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop