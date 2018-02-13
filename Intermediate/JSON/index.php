<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >

<script>
'use strict';

let myInfo = {
    'name': 'Nocolas',
    'age': 22,
    'country': 'Austria',
    'profession': 'Singer'
}

let myInfoJson = JSON.stringify(myInfo);
localStorage.setItem('myInfo', myInfoJson);

</script>

</body>
</html>