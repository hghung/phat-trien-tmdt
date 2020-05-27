@extends('house.master')
@section('tieude','Dashboard')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Invoice</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Pages</span>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Invoice</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Profile Setting Start -->
<div class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
			@include('house.account.category')
			<div class="col-lg-9">
				<table class="list_table mb-5 mt_md_50">
					<thead>
						<tr>
							<td>Mã hợp đồng</td>
							<td>Ngày thuê</td>
							<td>Ngày trả</td>
                            <td>Giá trị</td>
							<td>Trạng thái</td>
							<td>View</td>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td><a href="invoice_details.html">UKJ81712</a></td>
							<td>01-08-2020</td>
                            <td>01-12-2020</td>
							<td>20.000.000 đ</td>
							<td class="due">Đã thuê</td>
							<td>
                                <a href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
						</tr>
						
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

<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
   
{!! Toastr::message() !!}
@endsection