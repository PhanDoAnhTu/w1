 @extends('layouts.site')

 @section('title', 'Product')

 @section('content')
 <!-- sidebar + content -->
 <section class="">
     <div class="container">
         <div class="row">
             <!-- sidebar -->
             <div class="col-lg-3">
                 <!-- Toggle button -->
                 <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span>Show filter</span>
                 </button>
                 <!-- Collapsible wrapper -->
                 <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                     <div class="accordion" id="accordionPanelsStayOpenExample">
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                     Danh mục
                                 </button>
                             </h2>
                             <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                 <div class="accordion-body">
                                     <ul class="list-unstyled">
                                         <li><a href="#" class="text-dark">Danh mục 1 </a></li>
                                         <li><a href="#" class="text-dark">Danh mục 2 </a></li>
                                         <li><a href="#" class="text-dark">Danh mục 3 </a></li>
                                         <li><a href="#" class="text-dark">Danh mục 4</a></li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                     Thương hiệu
                                 </button>
                             </h2>
                             <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                 <div class="accordion-body">
                                     <div>
                                         <!-- Checked checkbox -->
                                         <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked />
                                             <label class="form-check-label" for="flexCheckChecked1">Thương hiệu 1</label>
                                             <span class="badge badge-secondary float-end">120</span>
                                         </div>
                                         <!-- Checked checkbox -->
                                         <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                                             <label class="form-check-label" for="flexCheckChecked2">Thương hiệu 2</label>
                                             <span class="badge badge-secondary float-end">15</span>
                                         </div>
                                         <!-- Checked checkbox -->
                                         <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                                             <label class="form-check-label" for="flexCheckChecked2">Thương hiệu 3</label>
                                             <span class="badge badge-secondary float-end">111</span>
                                         </div>
                                         <!-- Checked checkbox -->
                                         <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                                             <label class="form-check-label" for="flexCheckChecked2">Thương hiệu 4</label>
                                             <span class="badge badge-secondary float-end">70</span>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                     Khoảng giá
                                 </button>
                             </h2>
                             <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                 <div class="accordion-body">
                                     <div class="range">
                                         <input type="range" class="form-range" id="customRange1" />
                                     </div>
                                     <div class="row mb-3">
                                         <div class="col-6">
                                             <p class="mb-0">
                                                 Thấp nhất
                                             </p>
                                             <div class="form-outline">
                                                 <input type="number" id="typeNumber" class="form-control" />
                                                 <label class="form-label" for="typeNumber">0 VNĐ</label>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <p class="mb-0">
                                                 Cao nhất
                                             </p>
                                             <div class="form-outline">
                                                 <input type="number" id="typeNumber" class="form-control" />
                                                 <label class="form-label" for="typeNumber">100.000 VNĐ</label>
                                             </div>
                                         </div>
                                     </div>
                                     <button type="button" class="btn btn-white w-100 border border-secondary">Áp dụng</button>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                     Kích thước
                                 </button>
                             </h2>
                             <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                 <div class="accordion-body">
                                     <input type="checkbox" class="btn-check border justify-content-center" id="btn-check1" checked autocomplete="off" />
                                     <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check1">XS</label>
                                     <input type="checkbox" class="btn-check border justify-content-center" id="btn-check2" checked autocomplete="off" />
                                     <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check2">SM</label>
                                     <input type="checkbox" class="btn-check border justify-content-center" id="btn-check3" checked autocomplete="off" />
                                     <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check3">LG</label>
                                     <input type="checkbox" class="btn-check border justify-content-center" id="btn-check4" checked autocomplete="off" />
                                     <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check4">XXL</label>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                     Đánh giá
                                 </button>
                             </h2>
                             <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                 <div class="accordion-body">
                                     <!-- Default checkbox -->
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                         <label class="form-check-label" for="flexCheckDefault">
                                             <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-warning"></i>
                                         </label>
                                     </div>
                                     <!-- Default checkbox -->
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                         <label class="form-check-label" for="flexCheckDefault">
                                             <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </label>
                                     </div>
                                     <!-- Default checkbox -->
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                         <label class="form-check-label" for="flexCheckDefault">
                                             <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </label>
                                     </div>
                                     <!-- Default checkbox -->
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                         <label class="form-check-label" for="flexCheckDefault">
                                             <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                                             <i class="fas fa-star text-secondary"></i>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- sidebar -->
             <!-- content -->
             <div class="col-lg-9">
                 <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                     <strong class="d-block py-2">30 sản phẩm</strong>
                     <div class="ms-auto">
                         <select class="form-select d-inline-block w-auto border pt-1">
                             <option value="0">Bán chạy</option>
                             <option value="1">Mới nhất</option>
                             <option value="2">Đánh giá cao</option>
                         </select>
                         <div class="btn-group shadow-0 border">
                             <a href="#" class="btn btn-light" title="List view">
                                 <i class="fa fa-bars fa-lg"></i>
                             </a>
                             <a href="#" class="btn btn-light active" title="Grid view">
                                 <i class="fa fa-th fa-lg"></i>
                             </a>
                         </div>
                     </div>
                 </header>

                 <div>
                     <div class="row justify-content-center mb-3">
                         <div class="col-md-12">
                             <div class="card shadow-0 border rounded-3">
                                 <div class="card-body">
                                     <div class="row g-0">
                                         <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                             <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                                 <img src="./img/sanpham.jpg" class="w-100" />
                                                 <a href="#!">
                                                     <div class="hover-overlay">
                                                         <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                     </div>
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="col-xl-6 col-md-5 col-sm-7">
                                             <h5>Tên sản phẩm</h5>
                                             <div class="d-flex flex-row">
                                                 <div class="text-warning mb-1 me-2">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="far fa-star"></i>
                                                     <i class="far fa-star"></i>
                                                     <span class="ms-1">
                                                         3
                                                     </span>
                                                 </div>
                                                 <span class="text-muted">73 đơn hàng</span>
                                             </div>

                                             <p class="text mb-4 mb-md-0">
                                                 Mô tả sản phẩm .................................................................
                                                 ............................................................................................
                                                 .............................................................................................
                                                 ...........................................................................................[...]
                                             </p>
                                         </div>
                                         <div class="col-xl-3 col-md-3 col-sm-5">
                                             <div class="d-flex flex-row align-items-center mb-1">
                                                 <h4 class="mb-1 me-1">150.000 đ</h4>
                                                 <span class="text-danger"><s>300.000 đ</s></span>
                                             </div>
                                             <h6 class="text-warning">Có phí giao hàng</h6>
                                             <div class="mt-4">
                                                 <button class="btn btn-warning shadow-0 mb-1" type="button">Mua ngay</button>

                                                 <button class="btn btn-success shadow-0" type="button">Thêm vào giỏ hàng</button>
                                                 <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <div class="row justify-content-center mb-3">
                         <div class="col-md-12">
                             <div class="card shadow-0 border rounded-3">
                                 <div class="card-body">
                                     <div class="row g-0">
                                         <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                             <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                                 <img src="./img/sanpham.jpg" class="w-100" />
                                                 <a href="#!">
                                                     <div class="hover-overlay">
                                                         <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                     </div>
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="col-xl-6 col-md-5 col-sm-7">
                                             <h5>Tên sản phẩm</h5>
                                             <div class="d-flex flex-row">
                                                 <div class="text-warning mb-1 me-2">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="far fa-star"></i>
                                                     <i class="far fa-star"></i>
                                                     <span class="ms-1">
                                                         3
                                                     </span>
                                                 </div>
                                                 <span class="text-muted">73 đơn hàng</span>
                                             </div>

                                             <p class="text mb-4 mb-md-0">
                                                 Mô tả sản phẩm .................................................................
                                                 ............................................................................................
                                                 .............................................................................................
                                                 ...........................................................................................[...]
                                             </p>
                                         </div>
                                         <div class="col-xl-3 col-md-3 col-sm-5">
                                             <div class="d-flex flex-row align-items-center mb-1">
                                                 <h4 class="mb-1 me-1">150.000 đ</h4>
                                                 <span class="text-danger"><s>300.000 đ</s></span>
                                             </div>
                                             <h6 class="text-warning">Có phí giao hàng</h6>
                                             <div class="mt-4">
                                                 <button class="btn btn-warning shadow-0 mb-1" type="button">Mua ngay</button>

                                                 <button class="btn btn-success shadow-0" type="button">Thêm vào giỏ hàng</button>
                                                 <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="row justify-content-center mb-3">
                     <div class="col-md-12">
                         <div class="card shadow-0 border rounded-3">
                             <div class="card-body">
                                 <div class="row g-0">
                                     <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                         <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                             <img src="./img/sanpham.jpg" class="w-100" />
                                             <a href="#!">
                                                 <div class="hover-overlay">
                                                     <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-md-5 col-sm-7">
                                         <h5>Tên sản phẩm</h5>
                                         <div class="d-flex flex-row">
                                             <div class="text-warning mb-1 me-2">
                                                 <i class="fa fa-star"></i>
                                                 <i class="fa fa-star"></i>
                                                 <i class="fa fa-star"></i>
                                                 <i class="far fa-star"></i>
                                                 <i class="far fa-star"></i>
                                                 <span class="ms-1">
                                                     3
                                                 </span>
                                             </div>
                                             <span class="text-muted">173 đơn hàng</span>
                                         </div>

                                         <p class="text mb-4 mb-md-0">
                                             Mô tả sản phẩm .................................................................
                                             ............................................................................................
                                             .............................................................................................
                                             ...........................................................................................[...]
                                         </p>
                                     </div>
                                     <div class="col-xl-3 col-md-3 col-sm-5">
                                         <div class="d-flex flex-row align-items-center mb-1">
                                             <h4 class="mb-1 me-1">175.000 đ</h4>
                                             <span class="text-danger"><s>250.000 đ</s></span>
                                         </div>
                                         <h6 class="text-success">Miễn phí giao hàng</h6>
                                         <div class="mt-4">
                                             <button class="btn btn-warning shadow-0 mb-1" type="button">Mua ngay</button>

                                             <button class="btn btn-success shadow-0" type="button">Thêm vào giỏ hàng</button>
                                             <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row justify-content-center mb-3">
                     <div class="col-md-12">
                         <div class="card shadow-0 border rounded-3">
                             <div class="card-body">
                                 <div class="row g-0">
                                     <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                         <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                             <img src="./img/sanpham.jpg" class="w-100" />
                                             <a href="#!">
                                                 <div class="hover-overlay">
                                                     <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-md-5 col-sm-7">
                                         <h5>Tên sản phẩm</h5>
                                         <div class="d-flex flex-row">
                                             <div class="text-warning mb-1 me-2">
                                                 <i class="fa fa-star"></i>
                                                 <i class="fa fa-star"></i>
                                                 <i class="fa fa-star"></i>
                                                 <i class="far fa-star"></i>
                                                 <i class="far fa-star"></i>
                                                 <span class="ms-1">
                                                     3
                                                 </span>
                                             </div>
                                             <span class="text-muted">173 đơn hàng</span>
                                         </div>

                                         <p class="text mb-4 mb-md-0">
                                             Mô tả sản phẩm .................................................................
                                             ............................................................................................
                                             .............................................................................................
                                             ...........................................................................................[...]
                                         </p>
                                     </div>
                                     <div class="col-xl-3 col-md-3 col-sm-5">
                                         <div class="d-flex flex-row align-items-center mb-1">
                                             <h4 class="mb-1 me-1">175.000 đ</h4>
                                             <span class="text-danger"><s>250.000 đ</s></span>
                                         </div>
                                         <h6 class="text-success">Miễn phí giao hàng</h6>
                                         <div class="mt-4">
                                             <button class="btn btn-warning shadow-0 mb-1" type="button">Mua ngay</button>

                                             <button class="btn btn-success shadow-0" type="button">Thêm vào giỏ hàng</button>
                                             <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>




                 <hr />

                 <!-- Pagination -->
                 <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                     <ul class="pagination">
                         <li class="page-item disabled">
                             <a class="page-link" href="#" aria-label="Previous">
                                 <span aria-hidden="true">&laquo;</span>
                             </a>
                         </li>
                         <li class="page-item active"><a class="page-link" href="#">1</a></li>
                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item"><a class="page-link" href="#">4</a></li>
                         <li class="page-item"><a class="page-link" href="#">5</a></li>
                         <li class="page-item">
                             <a class="page-link" href="#" aria-label="Next">
                                 <span aria-hidden="true">&raquo;</span>
                             </a>
                         </li>
                     </ul>
                 </nav>
                 <!-- Pagination -->
             </div>
         </div>
     </div>
 </section>
 @endsection