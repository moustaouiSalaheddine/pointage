<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var x = $("form").serializeArray();
    alert(JSON.stringify( x))
    $.each(x, function(i, field){
      $("#results").append(field.name + ":" + field.value + " ");
    });
  });
});
</script>
</head>
<body>

<form action="">
  First name: <input type="checkbox" name="FirstName" value="Mickey"><br>
  Last name: <input type="checkbox" name="LastName" value="Mouse"><br>
</form>

<button>Serialize form values</button>

<div id="results"></div>

</body>
</html>
