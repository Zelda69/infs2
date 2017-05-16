<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="/img/logo.png" type="image/x-icon">

</head>

<script type="text/javascript">
function loadFromTextFile()
{
var xmlhttp;
if (window.XMLHttpRequest) // kod pro IE7+, Firefox, Chrome, Opera, Safari
  {
  xmlhttp = new XMLHttpRequest();
  }
else // kod pro IE6, IE5
  {
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange = function()
  {
  if (this.readyState == 4 && this.status == 200) // this zde referuje na konkretni instanci XMLHTTP pozadavku, na nas xmlhttp
    {
    //alert(this.responseText);
    document.getElementById("text").innerHTML = this.responseText;    
    }
  }
xmlhttp.open("GET","./ajax_info.txt",true);
xmlhttp.send();
}
// zavolani funkce obsahujici AJAX
loadFromTextFile();
</script>

<script>
    /*
     window.onload = function() {
     document.getElementById("test").innerHTML = "Ahoj!";
     }*/

    $(function(){
        $("#test").css("color", "red");
        //$("#test").text("Ahoj!!!");
        var id = 5;
        $.ajax({
            type: "POST",
            data: "id="+id,
            url: "ajax_test.php",
            success: function(msg) {
                $("#text").text(msg).fadeIn(5000);
            }
        });
    });

</script>



<p id="text" style="display: none">Test</p>



<p id="test">Ty hovno!</p> <!-- Tohle je super text!-->