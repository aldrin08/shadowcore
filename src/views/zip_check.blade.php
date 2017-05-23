<!DOCTYPE html>
<html>
	<head>
		<title>ZIP TEST</title>

		{{ Html::style('bootstrap/css/bootstrap.min.css') }}
		{{ Html::style('css/styles.css') }}

	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">

						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							{{ Form::open(array('url' => '/search', 'method' => 'POST')) }}
								{{ csrf_field() }}
								{{ Form::text('zip_code', '', array('class' => 'form-control')) }}
								{{ Form::submit('SEARCH', array('class' => 'btn btn-primary float-right')) }}
							{{ Form::close() }}
						</div>
						<div class="col-lg-2"></div>

					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

					@if($data_zip!='')


						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<div class="bg-success padding-15 mt-20">
								<p>
									Municipality is {{ $data_zip->major_area }} City is {{ $data_zip->city }} for Zip Code {{ $data_zip->zip_code }}
								</p>

							</div>
						</div>
						<div class="col-lg-2"></div>


					@endif

				</div>
			</div>
		</div>

	</body>
</html>