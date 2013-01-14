<!DOCTYPE html>
<html lang="en">
<head>
	<title>YouTube Faves - Source Code | Andy Osuna: Web Design &amp; Photography</title>
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
			if(x==c_name){return unescape(y);}
		}
	}
	function setCookie(c_name,value,exdays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+exdays);
		var c_value=escape(value)+((exdays==null)?"":";expires="+exdate.toUTCString());
		document.cookie=c_name+"="+c_value;
	}
	function checkCookies(){
		var urlCookie=getCookie("urlCookie");
		var sizeCookie=getCookie("sizeCookie");
		if(urlCookie!=null&&urlCookie!=""||sizeCookie!=null&&sizeCookie!=""){
			document.getElementById("URLs").innerHTML=urlCookie;
			document.getElementById("size").value=sizeCookie;
			getThumbnails();
		}
	}//end checkCookies();
	
	function getThumbnails(){
		var urls=document.getElementById("URLs").value;
		setCookie("urlCookie",urls,365);
		var urlsArr=urls.split("\n");//create array
		var myFaves="";
		var size=document.getElementById("size").value;
		setCookie("sizeCookie",size,365);
		for(i=0;i<urlsArr.length;i++){
			var URLArr=urlsArr[i].split("/");
			var URL=urlsArr[i];
			var isValidoutubeUrl=false;
			if(URL.indexOf(".ytimg.com/vi/")>=0){
				isValidoutubeUrl=true;
			}else if(URL.indexOf(".youtube.com/watch?v=")>=0){
				isValidoutubeUrl=true;
			}
			if(isValidoutubeUrl==false){
				continue;
			}
			var n=URLArr[2].indexOf("www.youtube.com");
			if(n=="0"){
				var hashKeyIndex=3;
				var hashKeyClean=URLArr[hashKeyIndex].replace("watch?v=","");
				var hashKey=hashKeyClean;
				var videoURL=urlsArr[i];
				var imageURL="http://i2.ytimg.com/vi/"+hashKey+"/default.jpg";
			}else if(n=="-1"){			
				var hashKeyIndex=4;
				var hashKey=URLArr[hashKeyIndex];
				var videoURL="http://youtube.com/watch?v="+hashKey;
				var imageURL=urlsArr[i];
			}
			if(size=="Medium"){
				imageURL=imageURL.replace("default.jpg","mqdefault.jpg");
			}else if(size=="Large"){
				imageURL=imageURL.replace("default.jpg","hqdefault.jpg");
			}
			myFaves=myFaves+"<a href='"+videoURL+"' target='_blank'><img src='"+imageURL+"' class='img-polaroid' /></a>";			
		}
		document.getElementById("thumbnails").innerHTML=myFaves;
	}
	</script>

	<style type="text/css">
	select{
		width: 100%;
	}
	textarea{
		width: 96%;
		height: 100px;
	}
	</style>
</head>

<body onload="checkCookies();">
	<div class="container">
		
		<?php include('../includes/header.php');?>

		<div class="row">
			
			<div class="span3">
				<?php include('../includes/school-aside.php');?>
			</div>

			<div class="span9">
				<h1>YouTube Faves - Source Code <small><a href="http://www.andyosuna.com/school/yutrufs-sourcecode.php" target="_blank">Online File</a></small></h1>

				<div class="row">

					<div class="span4">
						<div class="alert alert-info">Source Code <small>Ver. 4</small></div>
						<textarea id="URLs"></textarea>
						<select id="size">
							<option>--Thumbnail Size--</option>
							<option>Small</option>
							<option>Medium</option>
							<option>Large</option>
						</select>
						<button class="btn btn-primary btn-block" onclick="getThumbnails();">Get Tumbnails</button>
					</div>

					<div class="span5">
						<div id="thumbnails"></div>
					</div>

				</div>

			</div>

		</div>
	</div>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>