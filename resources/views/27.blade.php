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
    <input @keyup.enter="func1">
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

new Vue({
    el:'#app',
    methods:{
        func1:function (event) {
            console.log(event.target.value)
        }
    }
})

</script>

</body>
</html>
