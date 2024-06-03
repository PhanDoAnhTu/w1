 
@extends('layouts.site')
 
 @section('title', 'Home')
  
 @section('content')
     <!-- Jumbotron -->
     <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/banner1.webp" class="d-block w-100" alt="Wild Landscape" />
        </div>
        <div class="carousel-item">
          <img src="./img/banner2.webp" class="d-block w-100" alt="Camera" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Jumbotron -->

    <!-- Heading -->
  </header>
  <!-- category -->
  <section>
    <div class="container pt-5">
      <nav class="row gy-4">
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-couch fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Interior items</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-basketball-ball fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Sport and travel</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-ring fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Jewellery</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-clock fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Accessories</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-car-side fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Automobiles</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-home fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Home items</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-guitar fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Musical items</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-book fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Book, reading</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-baby-carriage fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Kid's toys</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-paw fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Pet items</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-tshirt fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Men's clothing</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-shoe-prints fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Men's clothing</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-mobile fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Smartphones</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-tools fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Tools</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-pencil-ruler fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Education</div>
              </a>
            </div>
            <div class="col-3">
              <a href="#" class="text-center d-flex flex-column justify-content-center">
                <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                  <i class="fas fa-warehouse fa-xl fa-fw"></i>
                </button>
                <div class="text-dark">Other items</div>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- category -->
  <!-- Feature -->
  <section class="mt-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="card-banner bg-gray h-100" style="min-height: 200px;
                                                      background-size: cover;
                                                      background-position: center;
                                                      width: 100%;
                                                      background-repeat: no-repeat;
                                                      top: 50%;
                                                      background-image:url('./img/banner1.webp');">
            <div class="p-3 p-lg-5" style="max-width: 70%;">
              <h3 class="text-dark">Giảm giá lên đến 80%</h3>
              <button class="btn btn-warning shadow-0" href="#"> Săn ngay </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
            <div class="col-6 d-flex">
              <div class="card w-100 bg-primary" style="min-height: 200px;">
                <div class="card-body">
                  <h5 class="text-white">Mục 1</h5>
                  <p class="text-white-50">Giới thiệu</p>
                  <a class="btn btn-outline-light btn-sm" href="#">Xem thêm</a>
                </div>
              </div>
            </div>
            <div class="col-6 d-flex">
              <div class="card w-100 bg-primary" style="min-height: 200px;">
                <div class="card-body">
                  <h5 class="text-white">Mục 2</h5>
                  <p class="text-white-50">Giới thiệu</p>
                  <a class="btn btn-outline-light btn-sm" href="#">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <!-- row.// -->

          <div class="card bg-success" style="min-height: 200px;">
            <div class="card-body">
              <h5 class="text-white">Mục 3</h5>
              <p class="text-white-50" style="max-width: 400px;">Giới thiệu</p>
              <a class="btn btn-outline-light btn-sm" href="#">Xem thêm</a>
            </div>
          </div>
        </div>
        <!-- col.// -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container end.// -->
  </section>
  <!-- Feature -->
      <!-- Features -->
      <section>
        <div class="container mt-5">
          <div class="card p-4 bg-success bg-opacity-60">
            <div class="row align-items-center">
              <div class="col">
                <h4 class="mb-0 text-white">Sản phẩm mới</h4>
                <p class="mb-0 text-white-50">giới thiệu</p>
              </div>
              <div class="col-auto"><a class="btn btn-white text-white text-decoration-underline shadow-0" href="#">xem thêm</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features -->
  <!-- Products -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

   <!-- Feature -->
      <!-- Features -->
      <section>
        <div class="container mt-5">
          <div class="card p-4 bg-success bg-opacity-60">
            <div class="row align-items-center">
              <div class="col">
                <h4 class="mb-0 text-white">Sản phẩm bán chạy</h4>
                <p class="mb-0 text-white-50">giới thiệu</p>
              </div>
              <div class="col-auto"><a class="btn btn-white text-white text-decoration-underline shadow-0" href="#">xem thêm</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features -->
  <!-- Products -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="./img/sanpham.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tên sản phẩm</h5>
              <p class="card-text">100.000 đ <span class="text-danger"><s>300.000 đ</s></span></p>


              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-success shadow-0 me-1">Mua</a>
                <a href="#!" class="btn btn-success shadow-0 me-1">Thêm vào giỏ</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i
                    class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- Products -->

  <!-- Feature -->
  <section>
    <div class="container mt-5">
      <div class="px-4 pt-3 border">
        <div class="row pt-1">
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-thumbs-up fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Giá cả</h6>
                <p class="mb-0">sự lưạ chọn hàng đầu</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-plane fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Giao hàng</h6>
                <p class="mb-0">giao hàng trên toàn quốc</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-star fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Đánh giá</h6>
                <p class="mb-0">Được đánh giá cao</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 d-flex">
            <div class="d-flex align-items-center">
              <div class="badge badge-warning p-2 rounded-4 me-3">
                <i class="fas fa-phone-alt fa-2x fa-fw"></i>
              </div>
              <span class="info">
                <h6 class="title">Hỗ trợ</h6>
                <p class="mb-0">Nhân viên hỗ trợ 24/7</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature -->

  <!-- Blog -->
  <section class="mt-5 mb-4">
    <div class="container text-dark">
      <header class="mb-4">
        <h3>Bài viết nổi bật</h3>
      </header>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="./img/sanpham.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                12.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Tiêu đề bài viết</h6>
              </a>
              <p>Mô tả ngắn về bài viết ...........................................</p>
              <p>Mô tả ngắn về bài viết ...........................................</p>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="./img/sanpham.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                12.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Tiêu đề bài viết</h6>
              </a>
              <p>Mô tả ngắn về bài viết ...........................................</p>
              <p>Mô tả ngắn về bài viết ...........................................</p>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="./img/sanpham.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                12.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Tiêu đề bài viết</h6>
              </a>
              <p>Mô tả ngắn về bài viết ...........................................</p>
              <p>Mô tả ngắn về bài viết ...........................................</p>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="./img/sanpham.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                12.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Tiêu đề bài viết</h6>
              </a>
              <p>Mô tả ngắn về bài viết ...........................................</p>
              <p>Mô tả ngắn về bài viết ...........................................</p>
            </div>
          </article>
        </div>

      </div>
    </div>
  </section>
  <!-- Blog -->
 @endsection
