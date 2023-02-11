<template>

    <div>{{name}} </div>
</template>
<script>
import {inject} from "vue";

export default {

    setup(){
        const name = inject('namePro');
        console.log(name)
        return {name}
    },
};
</script>
<style></style>
