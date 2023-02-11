<template>
<!--    <div><h1>{{ userInfo.name }}</h1></div>-->
<!--    <div><h1>{{ userInfo.lastname }}</h1></div>-->
<!--    <div><h1>{{ userInfo.age }}</h1></div>-->
    <button v-on:click="sendData()">click</button>
</template>
<script>
export default {
    data() {
        return {
            name: 'navid'
        }
    },
    methods:{
        sendData(){
             this.$emit('childData',this.name)
        }
    }
}
</script>
<style></style>
