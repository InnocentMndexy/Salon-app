<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Get Visitor's Location Using HTML5 Geolocation</title>
<script>
    function showPosition() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
                var lat =  position.coords.latitude;
                var log =  position.coords.longitude;

                window.location.href = "http:./user.php?lattitude="+lat+"&Longitude="+log;
                $_SESSION['lat'] = $_GET['lattitude'];
                $_SESSION['log'] = $_GET['Longitude'];


            });
        } else {
            //window.location.href = "http:./user.php?errorLocation=error";
        }
    }
</script>
</head>
<body>
    <div id="result">
        
    </div>
</body>
</html>