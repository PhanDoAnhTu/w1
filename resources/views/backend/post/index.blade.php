@extends('layouts.admin')
@section('title', 'Topic')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 row">
                    <h1 class="d-inline col-md-10">Tất cả bài viết</h1>
                    <div class="col-md-2 text-right">
                        <a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i><sup>0</sup></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('admin.post.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Tiêu đề bài viết (*)</label>
                            <input type="text" name="title" id="title" placeholder="Nhập tên chủ đề" class="form-control" value="{{ old('title') }}">
                            @error('title')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Chọn chủ đề (*)</label>
                            <select name="topic_id" class="form-control">
                                <option value="0">None</option>
                                {!! $htmlTopicId !!}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Ảnh bài viết</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Chi tiết (*)</label>
                            <input type="text" name="detail" id="detail" placeholder="Nhập chi tiết" class=" form-control" value="{{ old('detail') }}">
                        </div>
                        <div class="mb-3">
                            <label>Mô tả (*)</label>
                            <textarea rows="3" name="description" id="description" placeholder="Nhập mô tả danh mục" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Loại</label>
                            <select  name="type" class="form-control">
                                <option value="0">Loại</option>
                                <option value="post">post</option>
                                <option value="page">page</option>
                            </select>
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
                                <th>Tên chủ đề</th>
                                <th>Tiêu đề bài viết</th>
                                <th>Tên slug</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPost as $row)
                            <tr class="datarow">
                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>
                                    {{ $row->id }}
                                </td>
                                <td>
                                    <img src="{{ asset('images/post/' . $row->image) }}" alt="post.jpg">
                                </td>
                             
                                <td>
                                    {{ $row->topic_name }}
                                </td>
                            
                                <td>
                                    {{ $row->title }}
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