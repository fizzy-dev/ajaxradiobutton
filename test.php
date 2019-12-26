<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tinh").click(function(){
				var a = $(".cau1:checked").val();
			    $.get("ketqua.php",{ketqua:a},function(data){
				$("#check").html(data);
			    });
			});
		});
	</script>
</head>
<body>
<p>1+1 =?</p><br>
<!-- <input type="text" name="cau1" id="cau1"> -->
<div id="cau1">
<input type="radio" class="cau1" name="cau1" value="1" /> 1
<input type="radio" class="cau1" name="cau1" value="2" /> 2
<input type="radio" class="cau1" name="cau1" value="3" /> 3	
</div>
<div id="check" ></div>
<input type="button" name="" id="tinh" value="gui dap an">

</body>
</html>