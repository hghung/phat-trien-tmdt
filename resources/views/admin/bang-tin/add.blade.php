@extends('admin.master')
@section('tieude','Admin')
@section('content')


<div class="main-content">
    <div class="breadcrumb">
        <h1>Đăng bản tin</h1>
        
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Form đăng tin</div>
                    <form name="add_name"  id="add_name" method="POST"  action="{{Route('bangtin.post.add')}}" enctype="multipart/form-data"> {{ csrf_field() }}

                        <div class="row">

                            <div class="col-md-12 form-group mb-3">
                                <label for="exampleInputEmail1">Loại nhà</label>
                                <select class="form-control" name="idloainha">
                                    @foreach($loainha as $loainha2)
                                        <option value="{{ $loainha2->id }}"> {{ $loainha2->ten_loai }} </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            {{-- 1 --}}
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName1">Tiêu đề bảng tin</label>
                                <input class="form-control" name="name"  type="text" placeholder="Nhập tiêu đề bảng tin" />
                            </div>

                            {{-- 2 --}}
                            <div class="col-md-4 form-group mb-3">
                                <label for="lastName1">Giá</label>
                                <input class="form-control" name="price" id="lastName1" type="text" placeholder="Enter your last name" />
                            </div>

                            {{-- 3 --}}
                            <div class="col-md-4 form-group mb-3">
                                <label for="lastName1">Diện tích</label>
                                <input class="form-control" name="dientich" id="lastName1" type="text" placeholder="Enter your last name" />
                            </div>

                            {{-- 4 --}}

                            <div class="col-md-4 form-group mb-3">
                                <label for="exampleInputEmail1">Tình trạng</label>
                                <select class="form-control" name="status">
                                    <option value="1">Mới</option>
                                    <option value="2">Đã sử dụng</option>
                                    <option value="3">Like new</option>
                                </select>
                            </div>
                           
                            {{-- 5 --}}

                            <div class="col-md-12 form-group mb-3">
                                <label for="lastName1">Địa chỉ</label>
                                <input class="form-control" name="address" id="lastName1" type="text" placeholder="Enter your last name" />
                            </div>

                            {{-- 6 --}}

                            <div class="col-md-12 form-group mb-3">
                                <label for="lastName1">Mô tả</label>
                                <textarea class="form-control" name="mota" id="full-editor" type="text" placeholder="Enter your last name" /></textarea>
                            </div>

                            {{-- 7 --}}
                            <div class="col-md-12 form-group mb-3">
                                <label for="lastName1">Ảnh bìa</label>
                                <div class="custom-file">
                                    <input class="custom-file-input hinhanh_list" id="inputGroupFile01" type="file" name="hinhanh" />
                                    <label class="custom-file-label" for="inputGroupFile01">Thêm ảnh bìa</label>
                                </div>
                            </div>


                            {{-- 8 --}}
                            <div class="col-md-6 " style="margin-bottom: 20px;">  
                                <label for="lastName1">Danh sách hình ảnh</label>
                                <div class="fallback" >
                                    <input type="file" class="dropzone"  style="width: 90%;"  name="hinhanh2[]" multiple  />
                                </div>
                            </div>  
                            

                            {{-- 9 --}}

                            <div class="col-md-6 ">  
                                <label for="lastName1">Tài sản</label>
                                <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                        {{-- <td style="width: 50%"><input type="text" name="name[]" placeholder="Nhâp tài sản" class="form-control name_list" /></td> --}}
                                        <td style="width: 50%">
                                            <select class="form-control" name="taisan[]">
                                                @foreach($taisan as $taisan2)
                                                    <option value="{{ $taisan2->id }}"> {{ $taisan2->ten_ts }} </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td style="width: 15%"><input type="text" name="soluong[]" placeholder="Số lượng" class="form-control name_list" /></td>  
                                        <td style="width: 5%"><button type="button" name="add" id="add" class="btn btn-success">Thêm tài sản</button></td>  
                                    </tr>  
                                </table>  
                            </div>  

                            
                     


                            <div class="col-md-12">
                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>  



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    {{-- tài sản --}}
    <script>
        $(document).ready(function(){  
            var i=1;  
            $('#add').click(function(){  
                i++;  
                $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="form-control" name="taisan[]">@foreach($taisan as $taisan2)<option value="{{ $taisan2->id }}"> {{ $taisan2->ten_ts }}</option>@endforeach</select></td><td><input type="text" name="soluong[]" placeholder="Số lượng" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
            });  
            $(document).on('click', '.btn_remove', function(){      
                var button_id = $(this).attr("id");   
                $('#row'+button_id+'').remove();  
            });
             
        });  
    </script>


@endsection