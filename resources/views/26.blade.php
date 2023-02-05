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

    <a href="https://google.com" v-on:click.prevent="vFunc1">click</a>
    <a href="https://google.com" v-on:click.stop="vFunc2">click2</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

new Vue({
    el:'#app',
    data:{
        var1:''
    },methods:{
        vFunc1:function () {
            return this.var1='hiii',
                console.log(this.var1)
        },
        vFunc2:function () {
            return this.var1='hiii2',
            console.log(this.var1)
        }
    }
})

</script>

</body>
</html>
