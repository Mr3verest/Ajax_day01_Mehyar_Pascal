<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >

<button type="button" onclick="loadDoc()">Show</button>
<table id="content" border="1"></table>   

<script>

    function loadDoc() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200) {
                displayXML(this);
            }
        };

        xhttp.open('GET', 'songs.xml', true);
        xhttp.send();
    }

    function displayXML(xml) {
        let i;
        let docXML = xml.responseXML;
        let table = `<tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Country</th>
                    <th>Genre</th>
                    <th>Year</th>                                        
                </tr>`;

        songs = docXML.getElementsByTagName('song');

        for (i = 0; i < songs.length; i++) {
            table += '<tr><td>' +  
            songs[i].getElementsByTagName('title')[0].childNodes[0].nodeValue + 
            '</td><td>' +
            songs[i].getElementsByTagName('artist')[0].childNodes[0].nodeValue + 
            '</td><td>' + 
            songs[i].getElementsByTagName('country')[0].childNodes[0].nodeValue + 
            '</td><td>' +
            songs[i].getElementsByTagName('genre')[0].childNodes[0].nodeValue + 
            '</td><td>' +
            songs[i].getElementsByTagName('year')[0].childNodes[0].nodeValue + 
            '</td></tr>';
        }

        document.getElementById('content').innerHTML = table;
    }



</script>

</body>
</html>