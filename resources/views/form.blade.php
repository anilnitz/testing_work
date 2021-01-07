<!DOCTYPE html> 
<html> 
<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body> 
  
<form> 
  Name:<br> 
  <input type="text" name="email"> 
  <br> 
  Email:<br> 
  <input type="text" name="email"> 
  <br> 
  PAN Card:<br> 
  <input type="text" name="pan_no"> 
  <br>
  GST:<br> 
  <input type="text" id="txtGSTIN" pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$" title="Invalid GST Number." /> 
  <br><br> 

  <input type="submit" value="Submit"> 
</form>
</body>
<!-- <script type="text/javascript">
	$(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
        console.log(formValues);
        $.ajax({
			            type: "post",
			            dataType: 'JSON',
			            url: "/form_submit",
			            data: {
						        "_token": $('meta[name="csrf-token"]').attr('content'),
						        "id": formValues
						        },
	
			            success: function(response) {
			                console.log(response);
			            },
			            error: function(response) {
			                console.log('errorThrown');
			            }
        				})
 
        
    });
});
</script> -->
        <!-- <script>
            $("#myform").submit(function(event) {

            	console.log('ksdjflas');
                $.ajax({
			            type: "post",
			            url: "localhost:8000/form_submit",
			            data: postData,
			            contentType: "application/x-www-form-urlencoded",
			            success: function(response) {
			                console.log('asdkfjas');
			            },
			            error: function(response) {
			                console.log(errorThrown);
			            }
        				})
            });
        </script> -->
<!-- <script type="text/javascript">
$.ajax({
            type: "post",
            url: "url",
            data: postData,
            contentType: "application/x-www-form-urlencoded",
            success: function(responseData, textStatus, jqXHR) {
                alert("data saved")
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        })
</script>  -->

<script type="text/javascript">
  $(document).ready(function()
  {
    $("form").on("submit",function(event)
    {
      event.preventDefault();
      $.ajax({
                type: "GET",
                url: "/def",
                data: {
                  abc: "aa",
                  def: "dd",

                },
                dataType: "JSON",
                success: function(response)
                {
                  console.log(response);
                },
                error: function(response)
                {
                  console.log("error");
                },
      });
    });
  });
</script>
</html> 