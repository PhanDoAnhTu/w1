@extends('layouts.admin')
@section('title', 'Menu')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 row">
                    <h1 class="d-inline col-md-10">Tất cả menu</h1>
                    <div class="col-md-2 text-right">
                        <a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i><sup>0</sup></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('admin.menu.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Tên menu (*)</label>
                                <input type="text" name="name" id="name" placeholder="Nhập tên thương hiệu" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Link</label>
                                <input type="text" name="link" id="link" placeholder="Nhập link" class="form-control" value="{{old('link')}}">
                            </div>
                            <div class="mb-3">
                                <label>Mô tả (*)</label>
                                <textarea rows="3" name="description" id="description" placeholder="Nhập mô tả" class="form-control" value="{{old('description')}}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Bảng (*)</label>
                                <select name="table_id" class="form-control">
                                    <option value="1">None</option>
                                    <option value="2">Bang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Type (*)</label>
                                <input type="text" name="type" id="type" placeholder="Nhập type" class="form-control" value="{{old('type')}}">
                            </div>

                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                            <div class="card-header text-right">
                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                    Lưu
                                </button>
                            </div>

                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th>Id</th>
                                    <th>Tên menu</th>
                                    <th>Link</th>
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
                                        {{ $row->id }}
                                    </td>
                                    <td>
                                        {{ $row->name }}
                                    </td>
                                    <td>
                                        {{ $row->link }}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" href="#">Hiện</a>
                                        <a class="btn btn-sm btn-success" href="#">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info" href="">
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
            </div>
        </div>
    </section>
</div>

@endsection