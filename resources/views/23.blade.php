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

<div id="app">
<my-box>
    <h4 slot="title">I love Vue</h4>
</my-box>
<my-box>
    <p slot="text">Hiiii</p>
</my-box>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    Vue.component('my-box',{
        template:'<div><h3><slot name="title"></slot></h3><br><slot name="text"></slot><h5>salam</h5></div><hr>'
    })

    new Vue({
        el: "#app"
    })

</script>

</body>
</html>
