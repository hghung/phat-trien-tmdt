@extends('house.master')
@section('tieude','Đăng bảng tin')
@section('house_content')

    <section class="full_row bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Đăng bảng tin</h3>
                        <ul class="page_location float-right">
                            <li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
                            </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><span>Đăng bảng tin</span></li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Submit Property Start -->
    <section id="submit_property" class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <form class="submit_form" method="POST"  action="{{Route('bangtin.post.add')}}" enctype="multipart/form-data"> {{ csrf_field() }}
                        <div class="basic_information">
                            <h4 class="inner-title mb-4">Thông tin</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="tieude" placeholder="Tiêu đề bảng tin" class="form-control" required>
                                    </div>
                                </div>
                                {{--  Tình trạng  --}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker form-control"  name="status">
                                            <option>Chọn tình trạng</option>
                                            <option value="1">Mới</option>
                                            <option value="2">Đã qua sử dụng</option>
                                        </select>
                                    </div>
                                </div>
                                {{--  loại nhà  --}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker form-control" data-live-search="true" name="idloainha">
                                            <option>Chọn loại nhà</option>
                                                @foreach($loainha as $loainha2)
                                                <option value="{{ $loainha2->id }}">{{ $loainha2->ten_loai }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--    --}}
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="dientich" placeholder="Diện tích (m²)" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Giá (VNĐ)" class="form-control" name="price" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Số phòng" name="sophong" class="form-control" required>
                                    </div>
                                </div>
                                {{-- tính năng --}}
                                <div class="col-md-12">
                                    <div class="important_facts">
                                        <label>Bạn có bất kỳ hệ thống trả góp để thanh toán?</label>
                                        <div class="radio_check">
                                            <input type="checkbox" id="radio_1" class="hide" name="question" value="Yes" >
                                            <label for="radio_1"><span>No</span><span>Yes</span></label>
                                        </div>
                                    </div>
                                    <div class="important_facts">
                                        <label>Có bất kỳ bảo hiểm của tài sản này?</label>
                                        <div class="radio_check">
                                            <input type="checkbox" id="radio_2" class="hide" name="question" value="Yes" >
                                            <label for="radio_2"><span>No</span><span>Yes</span></label>
                                        </div>
                                    </div>
                                    <div class="important_facts">
                                        <label>Có bất kỳ sự bất thường của bên thứ ba với tài sản này?
                                        </label>
                                        <div class="radio_check">
                                            <input type="checkbox" id="radio_3" class="hide" name="question" value="Yes">
                                            <label for="radio_3"><span>No</span><span>Yes</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning">Vui lòng nhập thông tin chính xác bảng tin về ngồi nhà của bạn. Bởi vì nó sẽ có hiệu lực trên tìm kiếm bảng tin về ngôi nhà.</div>
                        </div>

                        {{--    --}}

                        <div class="description mt-5">
                            <h4 class="inner-title mb-4">Mô tả</h4>
                            <div class="form-group" >
                                <textarea id="editor" type="text" name="mota"></textarea>
                            </div>
                            <div class="alert alert-warning">
                                Cần có một mô tả thích hợp về bảng tin ngôi nhà. Vì vậy, khách hàng có thể dễ dàng hiểu về bảng tin ngôi nhà đó.
                            </div>
                        </div>

                        {{--    --}}

                        <div class="property_location mt-5">
                            <h4 class="inner-title mb-4">Vị trí ngôi nhà</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <select class="selectpicker form-control" data-live-search="true" id="tinhthanh" name="tinhthanh">
                                                    @foreach($province as $pr)
                                                        <option value="{{$pr->id}}">{{$pr->province_name}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="col-md-8 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="timkiem" name="diachi" placeholder="Nhập đia chỉ" required>
                                            </div>
                                        </div>

                                        {{-- lat --}}
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="lat" id="lat">
                                            </div>
                                        </div>
                                        {{-- lng --}}
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="lng" id="lng">
                                            </div>
                                        </div>

                                        <style>
                                            #map
                                            {
                                                width: 350px;
                                                height: 250px;
                                            }
                                        </style>

                                        <div id="map"  class="col-md-12 "> 

                                        </div>

                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>

                        {{--  Tiện ích  --}}
                        <div class="check_feature mt-5">
                            <h4 class="inner-title mb-4">Tiện ích</h4>
                            <div class="row">
                                <ul class="check_submit">

                                    @php
                                        
                                    $i = 1;
                                    $y = 1;
                                    
                                    @endphp
                                    

                                    @foreach($tienich as $tienich2)
                                   
                                    <li> 
                                        <input id="feature_{{ $i++ }}" name="tienich[]" value="{{ $tienich2->id }}" class="hide" type="checkbox">
                                        <label for="feature_{{ $y++ }}">{{ $tienich2->tien_ich }}</label>
                                        
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            <div class="alert alert-warning">Check the extra features and facility of the property, it will show with the property.</div>
                        </div>
                    

                        {{-- tai san --}}
                        <div class="check_feature mt-5">
                            <h4 class="inner-title mb-4">Tài sản</h4>
                            <table class="table table-bordered" id="dynamic_field">  
                                <tr>  
                                    <td style="width: 50%">
                                        <select class="form-control" name="taisan[]">
                                            @foreach($taisan as $taisan2)
                                                <option value="{{ $taisan2->id }}"> {{ $taisan2->ten_ts }} </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="width: 15%">
                                        <input type="text" name="soluong[]" placeholder="Số lượng" class="form-control name_list" required />
                                    </td>  
                                    <td style="width: 5%"><button type="button" name="add" id="add" class="btn btn_primary">Thêm tài sản</button></td>  
                                </tr>  
                            </table>  
                            <div class="alert alert-warning">Check the extra features and facility of the property, it will show with the property.</div>
                        </div>

                        

                        {{--  --}}
                        <div class="upload_media mt-5">
                            <h4 class="inner-title mb-4">Upload ảnh bảng tin and danh sách ảnh</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="browse_submit">
                                        <span>Ảnh bảng tin</span>
                                        <input type="file" id="fileupload-example-1" class="hide" name="hinhanh">
                                        <label class="fileupload_label" for="fileupload-example-1">Drop your photos here or Click</label>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="col-md-12">
                                    <div class="browse_submit">
                                        <span>Danh sách ảnh</span>
                                        <input type="file" id="fileupload-example-2" class="fileupload_label"  name="hinhanh2[]"  multiple>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="video_upload">
                                        <input type="url" placeholder="Add property video links or URL" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-warning">Please uplaod the photo of the property, please keep the photo size 760X410 ratio and please upload the PDF or Doc file at the document attachment.

                            </div>

                            <div class="browse_submit">
                                <button name="submit" class="btn btn_primary">submit property</button>
                                <p><span>note</span> : Your property will under review for 24 Hours after submission *</p>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
       
    {!! Toastr::message() !!}
    
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    
        <script async defer 
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&&amp;libraries=places%2Cgeometry&amp;callback=initMap&amp;ver=1">
        </script>
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {   lat: 10.0299337, 
                                lng: 105.7706153
                            },
                    zoom: 15
                });

                var marker = new google.maps.Marker({
                    position:{
                        lat: 10.0299337, 
                        lng: 105.7706153
                    },
                    map : map,
                    draggable: true
                });

                var searchBox = new google.maps.places.SearchBox(document.getElementById('timkiem'));

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;

                    for(i = 0; place=places[i]; i++)
                    {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);

                });
            }
        </script>


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