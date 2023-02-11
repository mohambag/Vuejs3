<template>
    <div>{{ name }}</div>
    <div>{{ obj }}</div>
    <button @click="updateName">click</button>
</template>
<script>

import {ref, reactive} from "vue";

export default {

    setup() {
        let name = ref('composition Api')
        const obj = reactive({
            a: 'A',
            b: 'B'
        })

        function updateName() {
            name.value = 'rezaaa';
            console.log(name);
            console.log(obj.a)
            obj.a="C"
        }

        return {name,obj, updateName}
    }

}
</script>
<style></style>
