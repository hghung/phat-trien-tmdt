@extends('admin.master')
@section('tieude','Admin')
@section('content')
    {{-- backup --}}
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Backup</h1>
            
        </div>

        <div class="separator-breadcrumb border-top"></div>

        
            <div class="row mb-4">
                <div class="col-md-12">
                    {{-- thong bao backup --}}
                    @if(session('backup'))
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Thông báo</h4>
                            <p></p>
                            <p class="mb-0">
                                <span style="color:green">{{session('backup')}}</span>
                            </p>
                        </div>
                    @endif

                    @if(session('delete'))
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">Thông báo</h4>
                            <p></p>
                            <p class="mb-0">
                                <span style="color:blue">{{session('delete')}}</span>
                            </p>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12 mb-4" style="margin-top: 5%;">
                    <div class="row">
                        {{-- chạy backup --}}
                        <div class="col-md-6">
                            <a name="backup" href="{{ route('backup.run') }}" class="btn btn-success" > 
                                Backup dữ liệu
                            </a>
                        </div>
                        {{-- delete backup --}}
                        <div class="col-md-6">
                            <a name="backup" href="{{ route('delete.run') }}" class="btn btn-danger" > 
                                Làm sạch backup cũ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

@endsection