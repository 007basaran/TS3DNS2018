<?php require_once 'islemler.inc.php'; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta http-equiv="Content-Type" name="Ahmet Berk BAŞARAN | TS3 DNS | Cloudflare API v4" content="text/html; charset=utf-8">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
</head>

<body>

<title>ABB - TS3DNS System - Cloudflare Api V4</title>

<style type="text/css">
.col-centered{
    float: none;
    margin: 0 auto;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-centered" align="center"> 
			<form id="dnsolusturForm" class="abb-form" method="POST">
				<img src="https://www.zirvesunucum.com/templates/zirveyeni/zirveall/images/zrv-footer.png"> </img> 
				<!-- Bütün uyarılar, java gelen. -->
				<div id="uyarilar" class="uyarilar"></div>
				<?php 
				if(!empty(g('p') == "zatenmevcut")){
				echo '<div id="gizleyebilirsin" class="alert alert-warning">Böyle bir dns adı daha önce alınmış, lütfen farklı bir isim deneyin.</div>';
				}else{ echo ''; }
				?>				
				<fieldset>
						<div class="row">
							<div class="abb-form-row">
								<div class="col-xs-6">
									<input type="text" class="form-control"  placeholder="Dns Adresiniz" name="dnsadgeldi" required=""> </input>
								</div>
							</div>
								
							<div class="abb-form-row">
								<div class="col-xs-6">
									<select name="select" class="form-control" onkeydown="return false" required=""> <option>.<? echo $domain; ?></option> </select>
								</div>
							</div> 
						</div> <br>
						
						<div class="abb-form-row">
							<input type="text" class="form-control"  placeholder="IP Adresiniz" name="dnsipgeldi" required=""> </input>
						</div> <br>
						
						<div class="abb-form-row">
							<input type="text" class="form-control"  placeholder="Portunuz" name="dnsportgeldi" required=""> </input>
						</div> <br>
						<center>
							<div class="abb-form-row">
								<input type="submit" value="Dns Oluştur" class="btn btn-default" onkeydown="return false" required="">
							</div>
						</center>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="gereken.js"></script>
<script type="application/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>

</body>
</html>