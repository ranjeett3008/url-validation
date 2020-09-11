<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   function isValidUrl(value)
	{
		var pattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
		var specialChars = "%<>@!#$%^&*()_+[]{}?;|'\"\\,~`-=";
		isValid = false;
		for(i = 0; i < specialChars.length;i++)
		{
			if(value.indexOf(specialChars[i]) > -1)
			{
				isValid = false;
				return false;
			}
		}
		var url = value.split("/");
		if( pattern.test(value) == true && url.length<=3)
		{
			isValid = true;
		}
		else
		{
			isValid = false;
		}
		return isValid;
	}

    $(document).on('click', '.submit', function(){
        var value = $('.url').val();
        isValidUrl(value);
    });
});
</script>
</head>
<body>

<input type="text" value="" class="url">
<input type="button" class="submit" value="Submit">
</body>
</html>
