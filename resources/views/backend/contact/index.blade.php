@extends('layout.admin')
@section('title', 'Contact')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <form action="{{route("admin.contact.store")}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name">Tên Lien He</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                    @error('phone')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="3" class="form-control"></textarea>
                </div>


                <div class="mb-3">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status" class="form-control">
                        <option value="2">Chưa xuất bản</option>
                        <option value="1">Xuất bản</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Thêm danh mục</button>
                </div>
            </form>
        </div>
        <div class="col-9">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 30px;">#</th>
                        <th>Tên Lien He</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Replay_id</th>
                        <th class="text-center" style="width: 190px;">Chức năng</th>
                        <th class="text-center" style="width: 190px;">ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 30px;">1</td>
                        <td class="text-center" style="width: 90px;"><img src="path/to/image.jpg" alt="IMG"></td>
                        <td>Tên sản phẩm</td>
                        <td>Tên danh mục</td>
                        <td>Tên thương hiệu</td>
                        <td>Tên thương hiệu</td>
                        <td>Tên thương hiệu</td>
                        <td class="text-center" style="width: 190px;">
                            <a href="#" class="btn btn-sm btn-success">
                                <i class="fa fa-toggle-on" aria-hidden="true"> Thêm</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-info">
                                <i class="fa fa-eye" aria-hidden="true"> Xem</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit" aria-hidden="true"> Sửa</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"> Xóa</i>
                            </a>
                        </td>
                        <td class="text-center" style="width: 190px;">1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection