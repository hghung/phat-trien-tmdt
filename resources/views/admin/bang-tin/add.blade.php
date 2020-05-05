@extends('admin.master')
@section('tieude','Admin')
@section('content')

<div class="main-content">
    <div class="breadcrumb">
        <h1>Basic</h1>
        <ul>
            <li><a href="href">Form</a></li>
            <li>Basic</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Thêm bảng tin</div>
                    <form name="add_name" id="add_name">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName1">First name</label>
                                <input class="form-control" id="firstName1" type="text" placeholder="Enter your first name" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="lastName1">Last name</label>
                                <input class="form-control" id="lastName1" type="text" placeholder="Enter your last name" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Enter email" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" placeholder="Enter phone" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="credit1">Cradit card number</label>
                                <input class="form-control" id="credit1" placeholder="Card" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="website">Website</label>
                                <input class="form-control" id="website" placeholder="Web address" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="picker2">Birth date</label>
                                <input class="form-control" id="picker2" placeholder="yyyy-mm-dd" name="dp" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="picker1">Select</label>
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 1</option>
                                    <option>Option 1</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="picker2">Birth date</label>
                                <input class="form-control" id="picker2" placeholder="yyyy-mm-dd" name="dp" />
                            </div>

                            <div class="col-md-10 ">  
                                <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                        <td style="width: 80%"><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td> 
                                        <td style="width: 15%"><input type="text" name="soluong[]" placeholder="Số lượng" class="form-control name_list" /></td>  

                                        <td style="width: 5%"><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                                </table>  
                            </div>  


                            <div class="col-md-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<script>
    $(document).ready(function(){  
        var i=1;  
        $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Số lượng" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
        });  
        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        });  
        $('#submit').click(function(){            
            $.ajax({  
                    url:"name.php",  
                    method:"POST",  
                    data:$('#add_name').serialize(),  
                    success:function(data)  
                    {  
                        alert(data);  
                        $('#add_name')[0].reset();  
                    }  
            });  
        });  
    });  
 </script>

@endsection