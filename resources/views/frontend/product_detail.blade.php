 
@extends('layouts.site')
 
 @section('title', 'Product_detail')
  
 @section('content')
    <!-- content -->
 <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image">
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                src="./img/sanpham.jpg" />
            </a>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
              class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="./img/sanpham.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
              class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="./img/sanpham.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
              class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="./img/sanpham.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
              class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="./img/sanpham.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
              class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="./img/sanpham.jpg" />
            </a>
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              Tên sản phẩm <br />
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>178 đơn hàng</span>
              <span class="text-success ms-2">đã bán</span>
            </div>

            <div class="mb-3">
              <p class="card-text"><span class="h5">185.000 đ</span> <span class="text-muted">/cái</span> </p>
              <span class="text-danger"></span><s>300.000đ</s></span>
            </div>

            <p>
              Mô tả ngắn về sản phẩm
            </p>

            <div class="row">
              <dt class="col-3">Loại:</dt>
              <dd class="col-9">...</dd>

              <dt class="col-3">Màu</dt>
              <dd class="col-9">Trắng</dd>

              <dt class="col-3">Chất liệu</dt>
              <dd class="col-9">Cotton</dd>

              <dt class="col-3">Thương hiệu</dt>
              <dd class="col-9">Everon</dd>
            </div>

            <hr />

            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Kích thước</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                </select>
              </div>
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1"
                    data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" class="form-control text-center border border-secondary" placeholder="14"
                    aria-label="Example text with button addon" aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2"
                    data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-warning shadow-0"> Mua ngay </a>
            <a href="#" class="btn btn-success shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Thêm vào giỏ hàng
            </a>
            <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                class="me-1 fa fa-heart fa-lg"></i> Thêm vào danh sách yêu thích </a>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->

  <section class="bg-light border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div class="border rounded-2 px-3 py-2 bg-white">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1"
                  data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1"
                  aria-selected="true">Mô tả chi tiết</a>
              </li>

              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3"
                  data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3"
                  aria-selected="false">Giao hàng</a>
              </li>

            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <p>
                  Mô tả chi tiết
                  ...............................................................................................
                  ........................................................................................................
                  ........................................................................................................<br>
                  Mô tả chi tiết
                  ...............................................................................................
                  ........................................................................................................
                  ........................................................................................................
                </p>
                <div class="row mb-2">
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6 mb-0">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                      <li><i class="fas fa-check text-success me-2"></i>Ưu điểm</li>
                    </ul>
                  </div>
                </div>
                <table class="table border mt-3 mb-2">
                  <tr>
                    <th class="py-2">Thông số:</th>
                    <td class="py-2">.....</td>
                  </tr>
                  <tr>
                    <th class="py-2">Thông số:</th>
                    <td class="py-2">.....</td>
                  </tr>
                  <tr>
                    <th class="py-2">Thông số:</th>
                    <td class="py-2">.....</td>
                  </tr>
                  <tr>
                    <th class="py-2">Thông số:</th>
                    <td class="py-2">.....</td>
                  </tr>
                </table>
              </div>

            </div>
            <!-- Pills content -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="px-0 border rounded-2 shadow-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Sản phẩm liên quan</h5>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="./img/sanpham.jpg" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Tên sản phẩm <br />
                      dòng 2
                    </a>
                    <strong class="text-dark"> 99.000 đ</strong>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="./img/sanpham.jpg" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Tên sản phẩm <br />
                      dòng 2
                    </a>
                    <strong class="text-dark"> 99.000 đ</strong>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="./img/sanpham.jpg" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Tên sản phẩm <br />
                      dòng 2
                    </a>
                    <strong class="text-dark"> 99.000 đ</strong>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="./img/sanpham.jpg" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Tên sản phẩm <br />
                      dòng 2
                    </a>
                    <strong class="text-dark"> 99.000 đ</strong>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="./img/sanpham.jpg" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Tên sản phẩm <br />
                      dòng 2
                    </a>
                    <strong class="text-dark"> 99.000 đ</strong>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection
 