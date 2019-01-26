<html>
	<head>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<label for="usertable">User</label><br/>
					<button type="submit" class="btn btn-info" id="createuser" data-toggle="modal" data-target="#usermodal">Create User</button>
					<table class="table table-striped table-condensed" id="usertable">
						<thead>
							<tr>
								<td>Firstname</td>
								<td>Middlename</td>
								<td>Lastname</td>
								<td>Position</td>
							</tr>
						</thead>
					</table>
				</div>

				<!-- for position -->
				<div class="col-md-12">
					<label for="position">Position</label><br/>
					<button type="submit" class="btn btn-info" id="addposition">Add Position</button>
					<table class="table table-striped table-condensed" id="position">
						<thead>
							<tr>
								<td>Position</td>
							</tr>
						</thead>
					</table>
				</div>

			</div>
		</div>

		@include('modals.createuser')

		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(document).on('click', '#saveUser', function(){
					var fname = $('#fname').val();
					var mname = $('#mname').val();
					var lname = $('#lname').val();
					var password = $('#password').val();

					// console.log(fname + " " + mname + " " + lname);

					$.ajax({

						url : "{{ url('api/createuser') }}",
						method : "POST",
						datatype : "JSON",
						data : {
							fname : fname,
							mname : mname,
							lname : lname,
							password : password
						},
						success:function(r){
							console.log(r);
						},
						error:function(r){
							console.log(r);
						}

					});

				});
			});
		</script>

	</body>
</html>