@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Danh sách bảng tin của bạn</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Danh sách bảng tin</span>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Profile Setting Start -->
<section class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
            @include('house.account.category')
			<div class="col-lg-9">
				<div class="mt_md_50">
					<table class="my_property_list type_2">
						<thead>
							<tr>
								<td>Thông tin</td>
								<td>Ngày đăng</td>
								<td>Lượt xem</td>
								<td>Đánh giá</td>
								<td>Thao tác</td>
							</tr>
						</thead>
						<tbody>

                            @foreach($dsbangtin as $list)

                                <tr>
                                    <td>
                                        <img width="120px" height="80px" src="{{ asset('public/upload/')}}/{{ $list->house->hinh_anh }} " alt="">
                                        <div class="text">
                                            <h6 class="title"><a href="#">Condos In the Middle of Roseland</a></h6>
                                            <span><i class="fas fa-map-marker-alt"></i>3896 Longview Avenue</span>
                                            <div class="price">$1800/mo</div>
                                        </div>
                                    </td>
                                    <td>July 28, 2017</td>
                                    
                                    <td>2</td>
                                    
                                    <td class="rating">
                                        <span title="0 Review">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="edit"><a href="#"><i class="fas fa-pencil-alt"></i> Edit</a></div>
                                        <div class="delete"><a href="#"><i class="fas fa-times"></i> Delete</a></div>
                                    </td>
                                </tr>

                            @endforeach  

                        </tbody>
                    </table>
					<!-- Pagination -->
					<div class="row">
							<div class="col-md-12">
								<div class="pagination_style1 mt-5">
									<nav aria-label="page navigation">
									  <ul class="pagination">
										<li><a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
									  </ul>
									</nav>
								</div>
							</div>
						</div>
					<!-- End Pagination -->
				</div>
			</div>
		</div>
	</div>
</section>

@endsection