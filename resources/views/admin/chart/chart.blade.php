@extends('admin.master')
@section('tieude','Admin')
@section('content')
    {{-- backup --}}
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Thông kê</h1>
            
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">{{ $chart3->options['chart_title'] }}</div>
                        <div style="height: 400px;">
                            {!! $chart3->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">{{ $chart1->options['chart_title'] }}</div>
                        <div style="height: 400px;">
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  end of row -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">{{ $chart2->options['chart_title'] }}</div>
                <div class="col-md-10" style="width:1200px !important;" >
                    {!! $chart2->renderHtml() !!}
                </div>
            </div>
        </div>
            
    </div>

{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
    
{!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}

{!! $chart3->renderChartJsLibrary() !!}
{!! $chart3->renderJs() !!}
@endsection