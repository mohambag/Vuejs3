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
<my-tag header="mohammad"></my-tag>
<my-tag :header="123"></my-tag>
<my-tag ></my-tag>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    Vue.component('my-tag',{
        props:{
            header:{
                type:[String,Number],
                required:true,
                default:'hi'
            }
        },
        template:'<div><h1>@{{ header }}</h1></div>'
    })

new Vue({
    el:'#app',
})

</script>

</body>
</html>
