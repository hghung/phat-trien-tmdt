@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Hợp đồng</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Hợp đồng</span>
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
				<table class="list_table mb-5 mt_md_50">
					<thead>
						<tr>
							<td>Mã hợp đồng</td>
                            <td>Ngày bắt đầu</td>
							<td>Ngày kết thúc</td>
							<td>Trạng thái</td>
							<td>Chủ nhà</td>
							<td>Giá thuê</td>
						</tr>
					</thead>
					<tbody>
                        @foreach($hopdong as $contract)
						<tr>
							<td>
                                <a href="{{ route('detail.contract',['id' => $contract->id]) }}">{{ $contract->ma_hopdong }}</a>

                            </td>
							
							<td>
                                {{ date("d-m-Y",strtotime($contract->time_start ))  }}
                            </td>
							<td>
                                {{ date("d-m-Y",strtotime($contract->time_end ))  }}
                            </td>
                            <td>
                               Thành công
                            </td>
							<td>
                                <a href="#">{{ $contract->user2_hoten }}</a>
                            </td>
							<td>
                                <a href="#">{{ $contract->tien }}</a>
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<!-- Pagination -->
				<div class="pagination_style1">
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
				<!-- End Pagination -->
			</div>
		</div>
	</div>
</div>
<!-- Profile Setting End -->