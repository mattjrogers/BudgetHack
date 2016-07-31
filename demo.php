<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>#BudgetHack | Live Demo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bugethack.css" rel="stylesheet">
    
    <!-- Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:700' rel='stylesheet' type='text/css'>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.4/mapbox.css' rel='stylesheet' />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid">
	<div class="row">
    
    	<div class="col-xs-12 col-md-4 col-lg-3">
    	<div class="row">
    
   	 		<div class="col-xs-10 col-xs-offset-1">
    		<h2 class="budgethack_titlename">#BudgetHack</h2>
    		<p class="budgethack_tagline">Examining rates of innovation in relation to local government budgets. A project by <a href="http://www.perthurbanist.com">Perth Urbanist</a></p>
        
    		<ul class="navigation">
    			<li><a href="http://perthurbanist.com/govhack/2016/index.php"><button type="button" class="btn btn-default">About Project</button></a></li>
       			<li><a href="http://perthurbanist.com/govhack/2016/demo.php"><button type="button" class="btn btn-default">Live Demo</button></a></li>
           	<li><a href="https://github.com/mattjrogers/BudgetHack"><button type="button" class="btn btn-default">GitHub (source code)</button></a></a></li>
    		</ul>
    		</div>
            
    	</div>
    	</div>
    
    	<div class="col-xs-12 col-md-8 col-lg-9">
    	<div class="row">
        	<div class="col-xs-12 maincontent">
            <div class="row" style="margin-bottom:25px;margin-top:50px;">
            <p style="text-align:center;">Select time series</p>
                <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
                
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">2013</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">2014</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">2015</button>
  </div>
</div>
                
                </div>
                </div>
            	  <div class="row budgethack_rowfix">
                  <div class="col-xs-10 col-xs-offset-1">
                  <div class="row budgethack_rowfix">
               		 <div class="col-xs-12 col-md-6">
                     		 <object id="localgovernment" data="data/lgwa2.svg" type="image/svg+xml"><img src="yourfallback.jpg" /></object>
                            <h3 class="budgethack_section_header2">Local Government Expenditures</h3>
                            <P STYLE="text-align:center">Local government areas</P>
                		</div>
                		<div class="col-xs-12 col-md-6">
                  <object data="data/lgwa2.svg" type="image/svg+xml"><img src="yourfallback.jpg" /></object>
                        <h3 class="budgethack_section_header2">Regional Innovation</h3>
                        <p STYLE="text-align:center">Innovation data is within a SA3 resolution</p>
                		</div>
                		</div>
                        </div>
                </div>
                
                <div class="row budgethack_rowfix">
                  <div class="col-xs-10 col-xs-offset-1">
                  <div class="datatspacer"></div>
					<div id="container2">
                    <div class="row" style="margin-top:75px;">
                     <div class="col-xs-6 col-sm-2" style="height:80px;background:white;text-align:center;padding-top:20px;">Legend</div>
                     
                    	<div class="col-xs-6 col-sm-2" style="background:#523B95;height:80px;color:#fff;text-align:center;padding-top:20px;">Transport</div>
                      <div class="col-xs-6 col-sm-2" style="background:#9B3E97;height:80px;color:#fff;text-align:center;padding-top:20px;">Recreation and Culture</div>
                      <div class="col-xs-6 col-sm-2" style="background:#B71E50;height:80px;color:#fff;text-align:center;padding-top:20px;">Other Property and Services</div>
                      <div class="col-xs-6 col-sm-2" style="background:#E41070;height:80px;color:#fff;text-align:center;padding-top:20px;">Law, Order, Public Safety</div>
                      <div class="col-xs-6 col-sm-2" style="background:#EA7EB2;height:80px;color:#fff;text-align:center;padding-top:20px;">Housing</div>
                     
                    </div>
                    <div class="row" style="margin-bottom:75px;">
                     <div class="col-xs-6 col-sm-2" style="background:#97B0DB;height:80px;color:#fff;text-align:center;padding-top:20px;">Health</div>
                    	<div class="col-xs-6 col-sm-2" style="background:#72CBE9;height:80px;color:#fff;text-align:center;padding-top:20px;">Governance</div>
                      <div class="col-xs-6 col-sm-2" style="background:#A6CAC7;height:80px;color:#fff;text-align:center;padding-top:20px;">General Purpose Funding</div>
                      <div class="col-xs-6 col-sm-2" style="background:#98CB60;height:80px;color:#fff;text-align:center;padding-top:20px;">Education and Welfare</div>
                      <div class="col-xs-6 col-sm-2" style="background:#00A668;height:80px;color:#fff;text-align:center;padding-top:20px;">Economic Services</div>
                      <div class="col-xs-6 col-sm-2" style="background:#19773C;height:80px;color:#fff;text-align:center;padding-top:20px;">Community Amenities</div>
                    </div>
                    
                    <div class="row" style="margin-bottom:50px;margin-top:50px;">
                <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
                <p style="text-align:center;">Sort table by</p>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">LG expenditure</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">No. of Patents</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">No. of New Businesses</button>
  </div>
</div>
                
                </div>
                </div>
                    
                    
					<svg id="chart" width="600" height="1500" viewBox="0 0 600 1500" perserveAspectRatio="xMinYMid"></svg>
 					</div>
                 </div>
                </div>
                
                <div class="row budgethack_rowfix">
                  <div class="col-xs-10 col-xs-offset-1">
                <div class="footer"><p>Project was created within 46 Hours for <a href="https://www.govhack.org/">GovHack 2016</a>.</p></div>
                </div>
                </div>
       		</div>
    	</div>
 		</div>
        
	</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- d3.js loading -->
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/topojson.v1.min.js"></script>
    
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.4/mapbox.js'></script>
    <script type="text/javascript" src="http://perthurbanist.com/govhack/2016/data/sa3.js"></script>
    <script src="js/maps.js"></script>
    <!-- d3.js Scripts -->
    <script src="js/charts.js"></script>
  </body>
</html>