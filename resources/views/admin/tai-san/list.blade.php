@extends('admin.master')
@section('tieude','Admin')
@section('content')
       
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Tài sản</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <!-- content goes here-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header gradient-purple-indigo 0-hidden pb-80">
                        <div class="pt-4">
                            <div class="row">
                                <h4 class="col-md-4 text-white">Tìm kiếm</h4>
                                <input class="form-control form-control-rounded col-md-4 ml-3 mr-3" id="exampleFormControlInput1" type="text" placeholder="Search loại nhà..." />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="ul-contact-list-body">
                            <div class="ul-contact-main-content">
                                <div class="ul-contact-left-side">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ul-contact-list">
                                                <div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
                                                <!-- modal-->
                                                <button class="btn btn-outline-secondary btn-block mb-4" type="button" data-toggle="modal" data-target="#exampleModal">Thêm</button>
                                                <!-- end:modal-->
                                                @include('admin.category_list')
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--  thêm dữ liệu  --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New loại nhà</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form    method="POST"  action="{{Route('taisan.post.add')}}" enctype="multipart/form-data"> {{ csrf_field() }}

                                                <div class="modal-body">

                                                        <div class="form-group">
                                                            <input name="name" class="form-control" type="text" placeholder="Name...." />
                                                        </div>
                                                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">
                                                        Save
                                                        changes
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                {{--  show du lieu  --}}
                                <div class="ul-contact-content">
                                    <div class="card">
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
                                                                <tbody>
                                                                    @foreach($taisan as $taisan2)
                                                                    <tr>
                                                                        <td>{{$taisan2->id}}</td>
                                                                        <td>{{$taisan2->ten_ts}}</td>
                                                                        <td>
                                                                            <button class="btn bg-transparent _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span><span class="_dot _r_block-dot bg-dark"></span></button>
                                                                            <div class="dropdown-menu" x-placement="bottom-start"><a class="dropdown-item" href="#"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit Contact</a><a class="dropdown-item" href="#"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete Contact</a></div>
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