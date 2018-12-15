<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
        <title></title>
        <script src="js/jquery.min.js"></script>
        <script src="js/moment.min.js"></script>
        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <script src="js/fullcalendar.min.js"></script>   
        <script src="js/es.js"></script> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/fullcalendar.min.css">
</head>
	<body>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div id="CalendarioWeb"></div>
                
                </div>
                <div class="col-md-2"></div>
            </div>
            

        </div>
        

        <script>
            $(document).ready(function(){
                $('#CalendarioWeb').fullCalendar();
            });
        
        
        
        </script>


	</body>
</html>