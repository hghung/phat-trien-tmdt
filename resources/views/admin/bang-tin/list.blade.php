@extends('admin.master')
@section('tieude','Admin')
@section('content')
       
<div class="main-content">
    <div class="row">

        <div class="breadcrumb">
            <h1>Danh sách bảng tin</h1>
        </div>

        <div style="margin-left: 75%;">
            <a href="{{ route('bangtin.list.restore') }}" class="btn btn-info">Khôi phục</a>
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <!-- content goes here-->
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header gradient-purple-indigo 0-hidden pb-80">
                    <div class="pt-4">
                        <div class="row">
                            <h4 class="col-md-4 text-white">Tìm kiếm</h4>
                            <input class="form-control form-control-rounded col-md-4 ml-3 mr-3" id="exampleFormControlInput1" type="text" placeholder="Search loại nhà..." />
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="ul-contact-list-body">
                        <div class="ul-contact-main-content">
                            {{--  show du lieu  --}}
                            <div class="ul-contact-content">
                                <div class="card " style="width: 1450px;">
                                    <div class="card-body">
                                        <div class="float-left"><i class="nav-icon i-Align-Justify-All text-25 ul-contact-mobile-icon"></i></div>
                                        <div class="tab-content ul-contact-list-table--label" id="nav-tabContent">
                                            <!-- all-contact-->
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                <div class="text-left">
                                                    <div class="table-responsive">
                                                        <table class="display table table-borderless ul-contact-list-table" id="contact_list_table" style="width:100%">
                                                            <thead>
                                                                <tr class="border-bottom">
                                                                    <th style="width: 40%;">ID</th>
                                                                    <th style="width: 40%;">Tên Loại</th>
                                                                    <th style="width: 40;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $stt = 1;   
                                                            @endphp
                                                            <tbody>
                                                                @foreach($bangtin as $bangtin2)
                                                                <tr>
                                                                    <td>{{$stt++}}</td>
                                                                    <td>{{$bangtin2->ten_bangtin}}</td>
                                                                    <td>
                                                                        <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                        <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit </a><a class="dropdown-item" href="{{ route('bangtin.delete',['id' => $bangtin2->id]) }}"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete </a></div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of main-content -->
</div>
            
@endsection