<?
    // include all the  pages to be linked
    include 'link_pages.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- CSS -->
    <link href='<? global $css1;echo $css1;?>' rel="stylesheet">
	<link href='<? global $css2;echo $css2;?>' rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- Preloader -->
    <div class="preloader">
    	<div class="loader">
    		<div class="loader__figure"></div>
    		<p class="loader__label">Loading...</p>
        </div>
    </div>

    <?
        // import header 
        include '../../template/header.tpl.php';


        // import sidebar
        include '../../template/sidebar.tpl.php';
    ?>


    <!-- Code for container -->
    <div class="page-wrapper">
    	<!-- Container -->
    	<div class="container-fluid">
    		<div class="row page-titles">
    			<div class="col-md-5 align-self-center">
    				<h3 class="text-themecolor">Land Detail</h3>	
    			</div>
    			<div class="col-md-12 align-self-center">
    				<div class="container">
    					<div class="row">
							<a href="detail_of_land_new.php">
    							<div class="column">
    								<p>Detail Of New Land </p><br>
								</div>
							</a>
							<a href="http://">
    							<div class="column">
    								<p>Update Detail of Land</p>
								</div>
							</a>
							<a href="http://">
    							<div class="column">
    								<p>Delete Detail Of Land</p>
								</div>
							</a>
							<a href="http://">
    							<div class="column">
    								<p>Proposal Aproval</p>
								</div>
							</a>
    					</div>
    				</div>
    			</div>
            </div>
			<? 
    		// import footer
            include '../../template/footer.tpl.php';
            #echo $_SERVER['DOCUMENT_ROOT'];
            //include ($_SERVER['DOCUMENT_ROOT'].'STPI/template/footer.tpl.php');
               
            
            ?>
        
    	</div>
    </div>


    

    <!-- JavaScript -->
    <script src='<? global $js1;echo $js1;?>'></script>
    <script src='<? global $js2;echo $js2;?>'></script>
</body>
</html>