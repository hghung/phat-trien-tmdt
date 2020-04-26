@extends('admin.layout')
@section('title','Sữa danh mục con')
@section('admin_content')

	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    {{-- <div class="col-md-6 col-sm-12">
                        <h1>Sữa thể loại</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                            </ol>
                        </nav>
                    </div>      --}}       
                 
                </div>
            </div>           
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Sữa danh mục con</h2>
                        </div>

                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        
                        <div class="body">
                            <form id="basic-form" novalidate  method="POST"  action="{{Route('s.ctg.post.edit',['id' => $subcategory->id])}}" enctype="multipart/form-data"> {{ csrf_field() }}


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Danh mục</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="idcategory">
                                        
                                        @foreach($category as $ctg)
                                            <option

                                                @if($subcategory->id_category == $ctg->id)
                                                    {{"selected"}}
                                                @endif

                                                value="{{$ctg->id}}">{{$ctg->category_name}}

                                            </option>
                                        @endforeach  
                                

                                    </select>
                                </div>


                            
                                <div class="input-group mb-3 ">
                                        
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Thể loại</label>
                                    </div>
                                    
                                    <input type="text" value="{{$subcategory->subcategory_name}}"    name="name"  class="form-control" required>

                                </div>
                                
                                <br>
                                <button type="submit" class="btn btn-success">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

@endsection