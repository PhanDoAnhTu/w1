@extends('layouts.admin')
@section('title', 'User')
@section('content')
    <form action="{{ route('admin.user.store') }}" method="post">
        @csrf
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="d-inline">Thêm thành viên</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-info">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Về danh sách
                        </a>
                        <button type="submit" class="btn btn-sm btn-success" name="CHANGEADD">
                            <i class="fa fa-save" aria-hidden="true"></i>
                            Lưu
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label>Tên(*)</label>
                                        <input type="text" placeholder="Nhập tên sản phẩm" name="name"
                                            class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" placeholder="Nhập email" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label>Số điện thoại</label>
                                        <input type="text" placeholder="Nhập số điện thoại" name="phone"
                                            class="form-control" value="{{ old('phone') }}">
                                            @error('phone')
                                            {{ $message }}
                                            @enderror
    
                                    </div>
                                    <div class="mb-3">
                                        <label>User name</label>
                                        <input type="text" placeholder="Nhập tên người dùng" name="username"
                                            class="form-control" value="{{ old('username') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Nhập mật khẩu" name="password"
                                            class="form-control" value="{{ old('password') }}">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
    
                                    </div>
                                    <div class="mb-3">
                                        <label>Địa chỉ</label>
                                        <input type="text" placeholder="Nhập địa chỉ" name="address"
                                            class="form-control" value="{{old('address')}}">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Vai trò</label>
                                        <select name="roles" class="form-control">
                                            <option value="customer">Khách hàng</option>
                                            <option value="admin">Quản trị viên</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Trạng thái</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Xuất bản</option>
                                            <option value="2">Chưa xuất bản</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection
