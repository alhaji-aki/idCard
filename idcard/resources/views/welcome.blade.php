<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">ID Card</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">Fill the Form and Submit</div>
						<div class="panel-body">
							<form class="form-horizontal" enctype="multipart/form-data" >
								<div class="col-sm-12">
									<p class="form-control-static text-danger">Picture should not be above 2MB</p>
								</div>
								<div class="form-group">
									<label for="picture" class="col-sm-3 control-label">Upload picture</label>
									<div class="col-sm-9">
										<input type="file" name="picture">
									</div>
								</div>

								<div class="form-group">
									<label for="subsidiary" class="col-sm-3 control-label">Subsidiary</label>
									<div class="col-sm-9">
										<select id="subsidiary" class="form-control" name="subsidiary">\
											<!--<option disabled select>--Select one--</option>-->
											<option id="SubahHolding" value="SubahHolding">Subah Holding</option>
											<option id="SubahInfo" value="SubahInfo">Subah Info</option>
											<option id="Vanguard" value="Vanguard">Vanguard</option>
											<option id="Melchia" value="Melchia">Melchia</option>
											<option id="Adroit" value="Adroit">Adroit</option>
											<option id="DocuPro" value="DocuPro">DocuPro</option>
										</select >
									</div>
								</div>

								<div class="form-group">
									<label for="company_name" class="col-sm-3 control-label">Company Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="company_name" placeholder="Company name">
									</div>
								</div>
								
								<div class="form-group">
									<label for="first_name" class="col-sm-3 control-label">First Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="first_name" placeholder="First Name">
									</div>
								</div>

								<div class="form-group">
									<label for="middle_name" class="col-sm-3 control-label">Middle Name</label>
									<div class="col-sm-9"> 
										<input type="text" class="form-control" name="middle_name" placeholder="Middle Nmae">
									</div>
								</div>

								<div class="form-group">
									<label for="last_name" class="col-sm-3 control-label">Last Name</label>
									<div class="col-sm-9"> 
										<input type="text" class="form-control" name="last_name" placeholder="Last Name">
									</div>
								</div>

								<div>
									<input type="submit" name="btn_submit" class="form-control">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<canvas width="410" height="550" id="canvas"></canvas>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>