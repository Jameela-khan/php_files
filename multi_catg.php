<?php
$conn=mysqli_connect("localhost","root","","admin23");

if (isset($_GET['submit']))
	
	{
		$tags=explode(",",$_GET['hidden-name']);
		foreach($tags as $tag);
		{
			$query=mysqli_query($conn,"INSERT INTO `multi_category`(`name`) VALUES ('$tag')");
		}
	}
?>




<!DOCTYPE html>
<html>
<head>


	<title>Php Tags</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  


</head>
<body>


<div class="container">
	<form>

		<div class="form-group">
			<label>Add Tags:</label><br/>
			<input type="text" name="name" placeholder="Tags" class="typeahead tm-input form-control tm-input-info"/>
		</div>


		<div class="form-group">
			<button class="btn btn-success" name="submit">Submit</button>
		</div>


	</form>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    var tagApi = $(".tm-input").tagsManager();


    jQuery(".typeahead").typeahead({
      name: 'tags',
      displayKey: 'name',
      source: function (query, process) {
        return $.get('ajaxpro.php', { query: query }, function (data) {
          data = $.parseJSON(data);
          return process(data);
        });
      },
      afterSelect :function (item){
        tagApi.tagsManager("pushTag", item);
      }
    });
  });
</script>


</body>
</html>