<template>
<hr>
    <h1>computed and watch</h1>
    <div><h2>name: {{name}}</h2></div>
    <div><h2>lastname:{{lastname}}</h2></div>
    <div><h2>fullname:{{fullname}}</h2></div>
    <button v-on:click="updateName">update Name</button>
</template>

<script>

import {computed, ref, watch, watchEffect} from "vue";

export default {
    setup() {
        const name = ref('ali');
        const lastname = ref('javadi');

        const fullname = computed(() => {
            return name.value + ' ' + lastname.value;
        })

        watch(name, (newName, oldName) => {
            console.log('newName=' + newName, ' ' + 'oldName=' + oldName)
        })

        watchEffect(() => {
            console.log(name.value);
            console.log(lastname.value)
        })

        function updateName() {
            name.value='mohammad';
        }
        return {name,lastname,fullname,updateName}
    }
}
</script>

<style></style>
