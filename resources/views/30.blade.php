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

    <button v-on:click="frameworkUpdate">Update</button>
    <div>
        @{{ framework }}
    </div>

    <button v-on:click="framworkDestroy">destroy</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    new Vue({
        el: '#app',
        data: {
            framework: 'Vuejs',
        },
        methods: {

            frameworkUpdate() {
                this.framework = 'Reactjs'
            },
            framworkDestroy(){
                this.$destroy();
            }

        },

        beforeCreate() {
            console.log('پیش از ساخته شدن');
        },

        created() {
            console.log('ساخته شده');
        },

        beforeMount() {
            console.log('پیش از mount شدن');
        },

        mounted() {
            console.log('مانت شده')
        },

        beforeUpdate() {
            console.log('پیش از اپدیت شدن')
            alert('before updated');
        },

        updated() {
            console.log('آپدیت شد')
        },

        beforeDestroy(){
            console.log('پیش از نابود کردن');
            alert('before Destroy')
        },

        destroy(){
            console.log('destroy')
        }


    })

</script>

</body>
</html>
