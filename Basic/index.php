<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <button type="button" onclick="loadDoc()">Show content</button>

    <div id="content" style="margin: 100px">
     </div>

<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('content').innerHTML = this.responseText;
            }
        };

        xhttp.open('GET', 'content.txt', true);
        xhttp.send();
    }
</script>
</body>
</html>