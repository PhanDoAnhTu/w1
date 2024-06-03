@extends('layouts.admin')
@section('title', 'User')
@section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 row">
                            <h1 class="d-inline col-sm-10">Tất cả thành viên</h1>
                            <div class="col-sm-2 text-right">
                                <a href="{{route('admin.user.create')}}" class="btn btn-sm btn-success">Thêm thành viên</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    {{-- <div class="card-header">
                        <select name="" id="" class="form-control d-inline" style="width:100px;">
                            <option value="">Xoá</option>
                        </select>
                        <button class="btn btn-sm btn-success">Áp dụng</button>
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-bordered" id="mytable">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th>Id</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                <tr class="datarow">
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>
                                        {{$row->name}}
                                    </td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" href="#">Hiện</a>
                                        <a class="btn btn-sm btn-success" href="#">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info" href="../backend/category_show.html">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="#">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

@endsection
