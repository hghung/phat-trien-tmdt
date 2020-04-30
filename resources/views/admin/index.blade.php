@extends('admin.master')
@section('tieude','Admin')
@section('content')
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Version 2</h1>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li>Version 2</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <!-- CARD ICON-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center"><i class="i-Data-Upload"></i>
                                <p class="text-muted mt-2 mb-2">Today&apos;s Upload</p>
                                <p class="text-primary text-24 line-height-1 m-0">21</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <p class="text-muted mt-2 mb-2">New Users</p>
                                <p class="text-primary text-24 line-height-1 m-0">21</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center"><i class="i-Money-2"></i>
                                <p class="text-muted mt-2 mb-2">Total sales</p>
                                <p class="text-primary text-24 line-height-1 m-0">4021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-big mb-4">
                            <div class="card-body text-center"><i class="i-Money-2"></i>
                                <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-big mb-4">
                            <div class="card-body text-center"><i class="i-Gear"></i>
                                <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-big mb-4">
                            <div class="card-body text-center"><i class="i-Bell"></i>
                                <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  Thông tin  --}}
            <div class="col-lg-6 col-md-12">
                <div class="card mb-4">
                    <div class="card-body p-0" style="margin-left: 20px; padding-bottom: 10px !important;">
                        <div class="row">
                            <h5 class="card-title m-0 p-3">Thông tin</h5>
                            <a href="#" class="card-title m-0 p-3" style="margin-left: 60% !important;">Câp nhật</a>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-6" style="margin-top: 15px;">
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-Calendar text-20 mr-1"></i> Birth Date</p><span>1 Jan, 1994</span>
                                </div>
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-Edit-Map text-20 mr-1"></i> Birth Place</p><span>Dhaka, DB</span>
                                </div>
                                <div class="mb-1">
                                    <p class="text-primary mb-1"><i class="i-Globe text-20 mr-1"></i> Lives In</p><span>Dhaka, DB</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-6" style="margin-top: 15px;">
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-MaleFemale text-20 mr-1"></i> Gender</p><span>1 Jan, 1994</span>
                                </div>
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-MaleFemale text-20 mr-1"></i> Email</p><span>example@ui-lib.com</span>
                                </div>
                                <div class="mb-1">
                                    <p class="text-primary mb-1"><i class="i-Cloud-Weather text-20 mr-1"></i> Website</p><span>www.ui-lib.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-6" style="margin-top: 15px;">
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-Face-Style-4 text-20 mr-1"></i> Profession</p><span>Digital Marketer</span>
                                </div>
                                <div class="mb-5">
                                    <p class="text-primary mb-1"><i class="i-Professor text-20 mr-1"></i> Experience</p><span>8 Years</span>
                                </div>
                                <div class="mb-1">
                                    <p class="text-primary mb-1"><i class="i-Home1 text-20 mr-1"></i> School</p><span>School of Digital Marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  End Thông tin  --}}
        </div>
        <!-- end of row-->
        <div class="row">
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="w-50 float-left card-title m-0">New Users</h3>
                        <div class="dropdown dropleft text-right w-50 float-right">
                            <button class="btn bg-gray-100" id="dropdownMenuButton_table1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable-collapse text-center" id="user_table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Smith</td>
                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="{{asset('public/admin/img/faces/1.jpg')}}" alt="" /></td>
                                        <td>Smith@gmail.com</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jhon Doe</td>
                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="{{asset('public/admin/img/faces/1.jpg')}}" alt="" /></td>
                                        <td>Jhon@gmail.com</td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Alex</td>
                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="{{asset('public/admin/img/faces/1.jpg')}}" alt="" /></td>
                                        <td>Otto@gmail.com</td>
                                        <td><span class="badge badge-warning">Not Active</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="w-50 float-left card-title m-0">Total Sales</h3>
                        <div class="dropdown dropleft text-right w-50 float-right">
                            <button class="btn bg-gray-100" id="dropdownMenuButton_table2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table2"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable-collapse text-center" id="sales_table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Watch</td>
                                        <td>12-10-2019</td>
                                        <td>$30</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Iphone</td>
                                        <td>23-10-2019</td>
                                        <td>$300</td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Watch</td>
                                        <td>12-10-2019</td>
                                        <td>$30</td>
                                        <td><span class="badge badge-warning">Not Delivered</span></td>
                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
            
        </div>
        <!-- end of row-->
        <!-- end of main-content -->
    </div>

@endsection