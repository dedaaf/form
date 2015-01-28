<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Yarilo - INVUL FORMULIER</title>

    
    <!-- Custom styles for this template -->
    <link href="http://localhost/voetbalzaken/root/style/style.css" rel="stylesheet">

    <script src="http://localhost/voetbalzaken/root/js/main.js" ; ?>></script>
    <script src="http://localhost/voetbalzaken/root/js/ajax.js"></script>
    <script src="http://localhost/voetbalzaken/root/js/select.js"></script>
    <script src="http://localhost/voetbalzaken/root/js/login.js"></script>


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>


  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-select/dist/css/bootstrap-select.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">



     <!-- TESTING AREA -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'voetbalzaken/root/navigation.php'); ?>


<div id="topArea">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-body">
                   <label id="title"><h3>Vul je standen in</h3></label>    
					    
				

				 <table class="table table-hover">
			        <div>Groep A</div>
			        	<thead>
			        		<tr>
				        		<th>Datum</th>
				        		<th>Thuis</th>
				        		<th>Uit</th>
				        		<th>Uitslag</th>
				        		
			        		</tr>
			        	</thead>
			        	<tbody>
			        		<tr>
			        			<td class="datum">12-03-2015</td>
			        			<td class="team_a">Nederland</td>
			        			<td class="team_b">Duitsland</td>
			        			<td class="uitslag">
			        					<div class="input-group">
											<input type="text" class="form-control" id="standTHUIS" class="user_result">
											<span class="input-group-addon"> - </span>
											<input type="text" class="form-control" id="standUIT" class="user_result">
											
										</div>
								</td>
							</tr>
							<tr>
			        			<td class="datum">12-03-2015</td>
			        			<td class="team_a">Nederland</td>
			        			<td class="team_b">Duitsland</td>
			        			<td class="uitslag">
			        					<div class="input-group">
											<input type="text" class="form-control" id="standTHUIS">
											<span class="input-group-addon"> - </span>
											<input type="text" class="form-control" id="standUIT">
											
										</div>
								</td>
							</tr>
							<tr>
			        			<td class="datum">12-03-2015</td>
			        			<td class="team_a">Nederland</td>
			        			<td class="team_b">Duitsland</td>
			        			<td class="uitslag">
			        					<div class="input-group">
											<input type="text" class="form-control" id="standTHUIS">
											<span class="input-group-addon"> - </span>
											<input type="text" class="form-control" id="standUIT">
											
										</div>
								</td>
							</tr>
							<tr>
			        			<td class="datum">12-03-2015</td>
			        			<td class="team_a">Nederland</td>
			        			<td class="team_b">Duitsland</td>
			        			<td class="uitslag">
			        					<div class="input-group">
											<input type="text" class="form-control" id="standTHUIS">
											<span class="input-group-addon"> - </span>
											<input type="text" class="form-control" id="standUIT">
											
										</div>
								</td>
							</tr>
			        	</tbody>
					</table>
					</div>
