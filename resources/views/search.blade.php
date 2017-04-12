<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Live Search</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<!-- JAVASCRIPT -->  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
	</head>
    <body>
        <div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>User info</h2>
						
					</div>
					<div class="panel-body">
						<div class="form-group">
							<input placeholder="Search By Name or Email" type="text" class="form-control" id="search" name="search" />
						</div>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>ID</tr>
								<tr>User Name</tr>
								<tr>Email</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
		    	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
		<script type="text/javascript">
			$('#search').on('keyup',function(){
				search_value=$(this).val();
				//alert(search_value);
				$.ajax({
					type:'GET',
					url: '{{ URL::to('search')}}',
					data: {'search': search_value},
					success:function(data){
						$('tbody').html(data);
					},
					error: function(err){
						console.log('Error'+err);
					}
				});
			});
		</script>
    </body>
</html>
