<html>
<head>
    <script type="text/javascript">
        function getDate() {
            var xmlhttp;

            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function ()   //Co se stane, když se zmení status requestu
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) //Pokud se vše provede v pořádku
                {
                    document.getElementById("dateField").innerHTML = xmlhttp.responseText; //Do našeho dateFieldu vloží text, který nám vrátí AJAXový požadavek.

                }
            }

            xmlhttp.open("GET", "ajax.php", true); //@param GET - Metoda požadavku(GET, POST), ajax.php - soubor k vráceni výsledku, true - zda má být async.
            xmlhttp.send(null);//Odešleme požadavek
        }
    </script>
</head>
<body>
<b id="dateField">Po kliknuti se zde objeví datum ;)</b> <!--zde budeme ajaxově(asynchronně) načítat datum-->
<input type="button" id="getDateButton" value="Získat dnešní datum" onclick="getDate()"/>
</body>
</html>