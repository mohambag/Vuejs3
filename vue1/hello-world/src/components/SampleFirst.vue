<template>
<!--    <div><h1>{{ userName }}</h1></div>-->
<!--    <div><h1>{{ userLastname }}</h1></div>-->
<!--    <div><h1>{{ userAge }}</h1></div>-->
    <div><h1>{{ userInfo.name }}</h1></div>
    <div><h1>{{ userInfo.lastname }}</h1></div>
    <div><h1>{{ userInfo.age }}</h1></div>
</template>

<script>
export default {
    props: {
        userInfo:Object
        // userName: String,
        // userLastname: String,
        // userAge: Number
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
div {
    color: red;
}
</style>
