<!DOCTYPE html>
<html lang="en">
<head>
	<title>MPG - Cookies | Andy Osuna: Web Design &amp; Photography</title>
	<meta http-equiv="viewport" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include('../includes/css.php');?>

	<script type="text/javascript">
	var _gaq=_gaq||[];
	_gaq.push(['_setAccount','UA-34465617-1']);
	_gaq.push(['_setDomainName','andyosuna.com']);
	_gaq.push(['_trackPageview']);
	(function(){
		var ga=document.createElement('script');
		ga.type='text/javascript';ga.async=true;
		ga.src=('https:'==document.location.protocol?'https://':'http://')+'stats.g.doubleclick.net/dc.js';
		var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
	})();
	</script>

	<script type="text/javascript">
	function getCookie(c_name){
		var i,x,y,ARRcookies=document.cookie.split(";");
		
		for(i=0;i<ARRcookies.length;i++){
			x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			x=x.replace(/^\s+|\s+$/g,"");
			if(x==c_name){
				return unescape(y);
			}
		}
	}
	function setCookie(c_name,value,exdays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+exdays);
		var c_value=escape(value)+((exdays==null)?"":"; expires="+exdate.toUTCString());
		document.cookie=c_name+"="+c_value;
	}
	function checkCookie(){
		var modelCookie=getCookie("modelCookie");
		var imageCookie=getCookie("imageCookie");
		var mpgCookie=getCookie("mpgCookie");
		var costCookie=getCookie("costCookie");
		var distanceCookie=getCookie("distanceCookie");
		var tripsCookie=getCookie("tripsCookie");
		if(modelCookie!=null&&modelCookie!=""){
			document.getElementById("model").value=modelCookie;
		}
		if(imageCookie!=null&&imageCookie!=""){
			document.getElementById("image").src=imageCookie;
		}
		if(mpgCookie!=null&&mpgCookie!=""){
			document.getElementById("mpg").value=mpgCookie;
		}
		if(costCookie!=null&&costCookie!=""){
			document.getElementById("cost").value=costCookie;
		}
		if(distanceCookie!=null&&distanceCookie!=""){
			document.getElementById("distance").value=distanceCookie;
		}
		if(tripsCookie!=null&&tripsCookie!=""){
			document.getElementById("trips").value=tripsCookie;
		}
	}
	//save both the MPG and the vehicle's image in pretty arrays
	var mpgArr=new Array();
	mpgArr["cruze"]="42";
	mpgArr["gti"]="30";
	mpgArr["corolla"]="28";
	mpgArr["a3"]="24";

	var imageArr=new Array();
	imageArr["cruze"]="http://www.chevrolet.com/content/chevrolet/northamerica/usa/nscwebsite/en/index/cars/2013-cruze/photos-and-videos/exterior/_jcr_content/mm_gal_c2/thumbnailArea/mm_gal_item_c2_21.img_resize.img_stage._2.jpg";
	imageArr["gti"]="http://www.fastmotoring.com/wp-content/uploads/2012/03/2013-Volkswagen-Golf-Mk7-render-630x4721.jpg";
	imageArr["corolla"]="http://www.toyota.com/img/vehicles/2013/corolla/gallery/full/ext_image2.jpg";
	imageArr["a3"]="http://www.autoguide.com/gallery/gallery.php/d/523312-2/2013-audi-a3-1.jpg";


	function mpg(){// defines image/mpg depending on the vehicle selected.
	var vehicle=document.getElementById("model").value;
		if(vehicle==""){
			return false;
		}else{
			document.getElementById("msg").style.visibility="hidden";
			document.getElementById("mpg").value=mpgArr[vehicle];
			document.getElementById("image").src=imageArr[vehicle];
			document.getElementById("msg").innerHTML="";
			setCookie("imageCookie",imageArr[vehicle],365);
		}//end if
	}//end mpg();

	function calculateTotal(){
	var vehicle=document.getElementById("model").value;
		if(vehicle==""){
			document.getElementById("msg").style.visibility="visible";
			document.getElementById("msg").innerHTML="Please select a Model";
			return false;			
		}else{
			var mpg=document.getElementById("mpg").value;
			var cost=document.getElementById("cost").value;
			var distance=document.getElementById("distance").value;
			var trips=document.getElementById("trips").value;
			setCookie("modelCookie",vehicle,365);

			if(isNaN(mpg)||mpg==""){
				document.getElementById("mpg-msg").style.visibility="visible";
				document.getElementById("mpg-msg").innerHTML="Please enter a number.";
				document.getElementById("mpg").value="";
				document.getElementById("mpg").focus();
				return false;
			}
			document.getElementById("mpg-msg").innerHTML="";
			document.getElementById("mpg-msg").style.visibility="hidden";
			setCookie("mpgCookie",mpg,365);

			if(isNaN(cost)||cost==""){
				document.getElementById("cost-msg").style.visibility="visible";
				document.getElementById("cost-msg").innerHTML="Please enter a number.";
				document.getElementById("cost").value="";
				document.getElementById("cost").focus();
				return false;
			}
			document.getElementById("cost-msg").innerHTML="";
			document.getElementById("cost-msg").style.visibility="hidden";
			setCookie("costCookie",cost,365);

			if(isNaN(distance)||distance==""){
				document.getElementById("distance-msg").style.visibility="visible";
				document.getElementById("distance-msg").innerHTML="Please enter a number.";
				document.getElementById("distance").value="";
				document.getElementById("distance").focus();
				return false;
			}
			document.getElementById("distance-msg").innerHTML="";
			document.getElementById("distance-msg").style.visibility="hidden";
			setCookie("distanceCookie",distance,365);

			if(isNaN(trips)||trips==""){
				document.getElementById("trips-msg").style.visibility="visible";
				document.getElementById("trips-msg").innerHTML="Please enter a number.";
				document.getElementById("trips").value="";
				document.getElementById("trips").focus();
				return false;
			}
			document.getElementById("trips-msg").style.visibility="hidden";
			document.getElementById("trips-msg").innerHTML="";
			setCookie("tripsCookie",trips,365);
		}//end if vehicle
		var wDistanceTotal=trips*distance*2; //Total distance in a week(ida y vuelta)
		var wCostTotal=Math.floor(((wDistanceTotal/mpg)*cost)*100)/100;//Total cost of fuel in a week (ida y vuelta)
		var mDistanceTotal=trips*distance*2*4; //Total distance in ~month(ida y vuelta)
		var mCostTotal=Math.floor(((mDistanceTotal/mpg)*cost)*100)/100;//Total cost of fuel in ~month (ida y vuelta)

		document.getElementById("post").style.visibility="visible";
		document.getElementById("wDistanceTotal").innerHTML=wDistanceTotal;
		document.getElementById("wCostTotal").innerHTML=wCostTotal;
		document.getElementById("mDistanceTotal").innerHTML=mDistanceTotal;
		document.getElementById("mCostTotal").innerHTML=mCostTotal;
	}//end calculateTotal();

	function updateResult(){
		var inputMPG=document.getElementById("mpg").value;
		var inputCost=document.getElementById("cost").value;
		var inputDistance=document.getElementById("distance").value;
		var inputTrips=document.getElementById("trips").value;

		if(inputMPG==""||inputCost==""||inputDistance==""||inputTrips==""){
			return false;
		}
		calculateTotal(inputMPG);
		calculateTotal(inputCost);
		calculateTotal(inputDistance);
		calculateTotal(inputTrips);
	}
	</script>

	<style type="text/css">
	</style>
</head>

<body onload="checkCookie();">
	<div class="container">
		
		<?php include('../includes/header.php');?>

		<div class="row">
			
			<div class="span3">
				<?php include('../includes/school-aside.php');?>
			</div>

			<div class="span9">
				<h1>MPG - Cookies <small>Cost of Fuel App <a href="http://www.andyosuna.com/school/mpg-cookies.php" target="_blank">Online File</a></small></h1>
				<div class="row">

					<div class="span3">
						<label>What Car Model do you Drive?</label>
						<select id="model" onchange="mpg();">
							<option value="">--Select Car Model--</option>
							<option value="cruze">Chevrolet Cruze</option>
							<option value="gti">Volkswagen GTI</option>
							<option value="corolla">Toyota Corolla</option>
							<option value="a3">Audi A3</option>
						</select>
						<div id="msg" class="alert"></div>

						<label>MPG:</label>
						<input type="text" id="mpg" value="" onchange="updateResult();" />
						<div id="mpg-msg" class="alert"></div>

						<label>Cost per Gallon of Fuel:</label>
						<input type="text" id="cost" value="" onchange="updateResult();" placeholder="$" />
						<div id="cost-msg" class="alert"></div>

						<label>Distance to Platt from home:</label>
						<input type="text" id="distance" value="" onchange="updateResult();" placeholder="...in miles" />
						<div id="distance-msg" class="alert"></div>

						<label>Number of trips per week:</label>
						<input type="text" id="trips" value="" onchange="updateResult();" />
						<div id="trips-msg" class="alert"></div>

						<button class="btn btn-primary" onclick="calculateTotal();">Calculate Total Cost</button>
					</div>

					<div class="span6">
						<img class="car-img" id="image" src="http://www.chevrolet.com/content/dam/Chevrolet/northamerica/usa/nscwebsite/en/Home/Homepage/01_images/CW_homepage_sonic-jd_bg.jpg" class="img-polaroid" width="100%" />
						<p class="lead" id="post">Total distance traveled per week: <strong id="wDistanceTotal"></strong> miles.<br />
							Total cost of fuel per week: $<strong id="wCostTotal"></strong><br />
							Total distance traveled per month: <strong id="mDistanceTotal"></strong> miles.<br />
							Total cost of fuel per month: $<strong id="mCostTotal"></strong></p>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script>
	document.getElementById("msg").style.visibility="hidden";
	document.getElementById("mpg-msg").style.visibility="hidden";
	document.getElementById("cost-msg").style.visibility="hidden";
	document.getElementById("distance-msg").style.visibility="hidden";
	document.getElementById("trips-msg").style.visibility="hidden";
	document.getElementById("post").style.visibility="hidden";
	</script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>