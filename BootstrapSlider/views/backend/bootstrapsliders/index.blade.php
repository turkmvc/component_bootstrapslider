@extends('backend::_layouts.application')

@section('title'){{ "Whole CMS Slider" }}@endsection

@section('page_title')
    <h1>Sliderlar</h1>
@endsection


@section('page_breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ route('admin.index') }}">Yönetim Paneli</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Sliderlar</a>
        </li>
    </ul>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-green-haze" style="width: 100%;">
                        <i class="fa fa-icon fa-pencil font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Sliderlar</span>
                        <a class="btn green pull-right" href="{{ route('admin.bootstrapslider.create') }}">
                            <i class="fa fa-plus"></i> Yeni Ekle
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    @include('backend::_errors.error')
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Slider Başlığı</th>
							<th>Slider</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr class="odd gradeX">
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->title }}</td>
								<td>{{ $slider->slider }}</td>
                                <td>
                                    <a href="{{ route('admin.bootstrapslider.edit',$slider->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Düzenle</a>
                                    <a href="{{ route('admin.bootstrapslider.destroy',$slider->id) }}" class="btn btn-danger btn-sm" data-method="delete"> <i class="fa fa-trash"></i> Sil</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('include_css')
    @include('backend::_layouts._table_css')
@endsection

@section('include_js')
    @include('backend::_layouts._table_js')
@endsection
