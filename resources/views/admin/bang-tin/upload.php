<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Upload | Gull admin template</title>
    <link href="{{asset('public/admin/css/css-family=Nunito-300,400,400i,600,700,800,900.css')}}"  rel="stylesheet" />
    <link href="{{asset('public/admin/css/lite-purple.css')}}"  rel="stylesheet" />
    <link href="{{asset('public/admin/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/admin/css/fontawesome-5.css')}}"  />
    <link href="{{asset('public/admin/css/metisMenu.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/admin/css/dropzone.min.css')}}"  />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        
            
            <div class="main-content pt-4">
               
                <!--  end of row -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">single upload</h4>
                                <form class="dropzone" id="single-file-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">multple upload</h4>
                                <form class="dropzone" id="multple-file-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">use button to upload</h4>
                                <button class="btn btn-primary mb-1" id="button-select">select files</button>
                                <form class="dropzone dropzone-area" id="button-select-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" />
                                    </div>
                                    <div class="dz-message">Drop Files Here To Upload</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Limit File Size & No. Of Files</h4>
                                <form class="dropzone dropzone-area" id="file-limit-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Accepted files</h4>
                                <form class="dropzone dropzone-area" id="file-accepted-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Remove thumbnail</h4>
                                <form class="dropzone dropzone-area" id="file-remove-thumbnail-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" /><a class="btn btn-danger dz-remove" data-dz-remove="data-dz-remove">trash</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  end of col -->
                </div>
                <!--  end of row -->
                <!-- end of main-content -->
            </div>

            
    <script src="{{asset('public/admin/js/jquery-3.3.1.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/perfect-scrollbar.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/tooltip.script.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/script.min.js')}}"></script>
    <script src="{{asset('public/admin/js/script_2.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/sidebar.large.script.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/feather.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/metisMenu.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/layout-sidebar-vertical.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/dropzone.min.js')}}"></script>
    <script src="{{asset('public/admin/js/dropzone.script.min.js')}}" ></script>
</body>

</html>