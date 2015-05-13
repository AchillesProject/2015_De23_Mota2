<html>
<head>
<script src="./js/jquery-1.11.3.min.js"></script>
<!--<script src="./js/jquery-ui.min.js"></script>-->
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.quicksearch.js"></script>
<script src="./js/jquery.multi-select.js" type="text/javascript"></script>
<link href="./css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./css/bootstrap.css">
<style>
	.custom-header {
    text-align: center;
    padding: 3px;
    background: #2C3747;
    color: #FFF;
    font-family:'Titillium Web', sans-serif;
    font-size: 14px;
}
</style>

<script type="text/javascript">
$(document).ready(function(){

	$.getJSON("fetch-data.php", function(result){
        /*$.each(result, function(key, value){
		
			alert(result.id.length);
            /$.each(value, function (index, data) {
				alert(data);
			})/
        });*/
		for (i = 0; i < result.id.length; i++) { 
			$('#my-select').append($('<option />').text(result.description[i] + (i+1) ).val(result.id[i]));
			//alert(result.description[i]);
		}
		s.multiSelect('refresh');
    });
	
}); 
</script>

  </head>
  <body style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif">
	<div class = "container">
		<div class="row">
			<div class="col-md-4">
				<div id = "myQuestions">
					<select multiple="multiple" id="my-select" name="my-select[]">
						
					</select>

					<div class="row">
						<div class="col-md-4">
							<button type="button" class="btn btn-success" id="auto-button">Auto Create</button>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-primary" id="random-button">Random Create</button>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-danger" id="remove-button">Remove All</button>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-md-4">
						<label for="exampleInputEmail1">Hard</label>
						<input type="number" class="form-control" id="hard-number">
					</div>
					<div class="col-md-4">
						<label for="exampleInputEmail1">Normal</label>
						<input type="number" class="form-control" id="normal-number">
					</div>
					<div class="col-md-4">
						<label for="exampleInputEmail1">Easy</label>
						<input type="number" class="form-control" id="easy-number">
					</div>
				</div>

			</div>
			<div class="col-md-6">
				<div class="form-group">
				  <textarea class="form-control" rows="14" cols="50" id="question_display"></textarea>
				</div>
			</div>
		</div>
	</div>
   </body> 
<script>
var s = $('#my-select');
s.multiSelect({
  afterSelect: function(values){
	
	$.getJSON("fetch-question.php?id="+values, function(result){
		$("#question_display").val(result.question+'\r\nA. '+result.sol_1+"\r\nB. "+
			  result.sol_2+"\r\nC. "+result.sol_3+"\r\nD. "+
			  result.sol_4);
	});
	//This is my statement one.&#13;&#10;This is my statement2
  },
  afterDeselect: function(values){
    //alert("Deselect value: "+values);
	//$("#question_display").val(content);
  }
});
</script>

<script>
	$('#random-button').click(function(){

		$('#my-select').multiSelect('deselect_all');

		$.getJSON("fetch-random.php", function(result){
		  	for (i = 0; i < result.length; i++) {
		  		$('#my-select').multiSelect('select', ''+result[i]);
		  	};
		  	/*var cars = ['1','2','3'];
		  	$('#my-select').multiSelect('select', cars);*/
		  	
		  	$('#my-select').multiSelect('refresh');
		})
	});

	$('#remove-button').click(function(){
		$('#my-select').multiSelect('deselect_all');
		$('#my-select').multiSelect('refresh');
	});

	$('#auto-button').click(function(){
		/*$(':input[name="uAcc"]').rules("add",
		{
			"remote" :
				{
			    	url: 'validate.php',
			    	type: "post",
			    	data:
			    	{
			        	emails: function()
			        	{
			              return $('#register-form :input[name="email"]').val();
			        	}
			      	}
				}
		});*/
	});
</script>


</html>