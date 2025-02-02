@extends('layouts.admin')
@section('title', 'Brand')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 row">
                        <h1 class="d-inline col-md-10">Tất cả thương hiệu</h1>
                        <div class="col-md-2 text-right">
                            <a href="#" class="text-danger"><i class="fa fa-trash"
                                    aria-hidden="true"></i><sup>0</sup></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header text-right">
                    <button class="btn btn-sm btn-success">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="{{ route('admin.brand.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label>Tên thương hiệu (*)</label>
                                    <input type="text" name="name" id="name" placeholder="Nhập tên thương hiệu"
                                        class="form-control">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug" placeholder="Nhập slug"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="description">Mô tả (*)</label>
                                    <textarea type="text" id="description" name="description" id="description" placeholder="Nhập mô tả danh mục"
                                        class="form-control" onkeydown="handle_slug(this.value);">{{ old('description') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="sort_order">Sắp xếp</label>
                                    <select name="sort_order" id="sort_order" class="form-control">
                                        {!! $htmlsortOrder !!}
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="status">Trạng thái</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Xuất bản</option>
                                        <option value="2">Chưa xuất bản</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success">
                                    Thêm thương hiệu
                                </button>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th>Id</th>
                                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Tên slug</th>
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
                                                <img src="" alt="brand.jpg">
                                            </td>
                                            <td>
                                                {{ $row->name }}
                                            </td>
                                            <td>
                                                {{ $row->slug }}
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
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
