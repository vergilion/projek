@extends('backend.sections.mainContent')
@section('content')

	<link rel="stylesheet" href="{{ asset('backend/vendor/dropzone/css/basic.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/vendor/dropzone/css/dropzone.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/vendor/pnotify/pnotify.custom.css') }}" />

	<section role="main" class="content-body">
		<header class="page-header">
			<h2><a href="{{route('produk')}}">Master Produk</a> | Edit</h2> 
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="{{ URL::route('dashboard') }}">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Change Data</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>
		
		<!-- start: page -->
			<div class="row">
				<div class="col-xs-12">
					<section class="panel form-wizard" id="w4">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<a href="#" class="fa fa-times"></a>
							</div>
			
							<h2 class="panel-title">Form Data</h2>
						</header>
						<div class="panel-body">
							<div class="wizard-progress wizard-progress-lg">
								<div class="steps-progress">
									<div class="progress-indicator"></div>
								</div>
								<ul class="wizard-steps">
									<li class="active">
										<a href="#w4-info" data-toggle="tab"><span>1</span>Info Produk</a>
									</li>
									<li>
										<a href="#w4-upload" data-toggle="tab"><span>2</span>Upload Gambar</a>
									</li>
								</ul>
							</div>
			
							<form class="form-horizontal" novalidate="novalidate" method="post" action="{{ route('produk.update',$data->p_id) }}" enctype="multipart/form-data">
								{{csrf_field()}}
								{{ method_field('PUT') }}
								<div class="tab-content">
									<div id="w4-info" class="tab-pane active">
										*Kolom Harus Diisi
										<div class="form-group">
											<label class="col-sm-3 control-label" for="kode">Kode*</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="kode" id="kode" required value="{{ $data->p_id }}" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="nama">Nama*</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="nama" id="nama" required value="{{ $data->p_nama }}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="deskripsi">Deskripsi*</label>
											<div class="col-sm-6">
												<textarea name="deskripsi" class="form-control" rows="7" required>{{ $data->p_deskripsi }}</textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="harga">Harga*</label>
											<div class="col-sm-6">
												<input type="number" class="form-control" name="harga" id="harga" required min="100" value="{{ $data->p_harga }}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="stok">Stok*</label>
											<div class="col-sm-6">
												<input type="number" class="form-control" name="stok" id="stok" required min="1" value="{{ $data->p_stok }}">
											</div>
										</div>
									</div>
									<div id="w4-upload" class="tab-pane">
										*Upload Gambar Minimal 1
										<div id="Imagesdata" class="tab-pane">
											<div class="row">
												<div class="dropzone dz-square dz-clickable" id="dropzone-example">
														<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-info btn-flat"><i class="fa fa-save"></i> Save</button>
									</div>
									
								</div>
							</form>
						</div>
						<div class="panel-footer">
							<ul class="pager">
								<li class="previous disabled">
									<a><i class="fa fa-angle-left"></i> Previous</a>
								</li>
								<li class="finish hidden pull-right">
									<a></i>Finish</a>
								</li>
								<li class="next">
									<a>Next <i class="fa fa-angle-right"></i></a>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</div>
		<!-- end: page -->
		
	</section>

	<!-- Specific Page Vendor -->
	<script src="{{ asset('backend/vendor/ios7-switch/ios7-switch.js') }}"></script>
	<script src="{{ asset('backend/vendor/dropzone/dropzone.js') }}"></script>

	<script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.js') }}"></script>
	<script src="{{ asset('backend/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
	<script src="{{ asset('backend/vendor/pnotify/pnotify.custom.js') }}"></script>
	<script src="{{ asset('backend/javascripts/forms/examples.wizard.js') }}"></script>
@endsection