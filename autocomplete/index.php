<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocomplete using PHP/Ajax and jQuery</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="main_title">Autocomplete using PHP/Ajax and jQuery</h1>
        <div class="content">
            <form>
                <div class="label_div">Type a keyword : </div>
                <div class="input_container">
                    <input type="text" id="country_id" onkeyup="autocomplet()">
                    <ul id="country_list_id"></ul>
                </div>
            </form>
        </div><!-- content -->    
    </div><!-- container -->
</body>
</html>
