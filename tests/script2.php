<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script>
function magic(str) {
    if (str.length == 0) {
        document.getElementById("magician").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // tento kód se provede v okamžiku navrácení hodnoty ze serveru
                document.getElementById("magician").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "kouzelnik.php?param1="+str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<p><b>Do inputu níže vložte volitelné číslo a nechte kouzelníka hádat!</b></p>
<form>
<input type="text" onkeyup="magic(this.value)">
</form>
<p>Kouzelník říká: <span id="magician"></span></p>
</body>
</html>