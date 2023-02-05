<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">

<div id="app1">
    <box></box>
</div>
<div id="app2">
<box2></box2>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    let box={
        template:'<div><h5>Hi</h5></div>'
    }

    let box2={
        template:'<div><h5>Bye</h5></div>'
    }

    new Vue({
        el:'#app1',
        components:{
            box
        }
    })

    new Vue({
        el:'#app2',
        components:{
            box2
        }
    })


</script>

</body>
</html>
