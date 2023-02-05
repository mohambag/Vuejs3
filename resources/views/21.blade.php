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
<article22 title="mohammad" body="description"></article22>
<article22 title="ali" body="description"></article22>
<article22 title="javad" body="here"></article22>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    Vue.component('article22',{
        props:['title','body'],
        template:'<div class="form-group"><div class="col-md-3"><div class="card"><div ' +
            'class="card-header"><h1>@{{title}}</h1></div><div class="card-footer"><p>@{{ body ' +
            '}}</p></div></div></div></div>'
    })

    new Vue({
        el:'#app',
    })

</script>

</body>
</html>
