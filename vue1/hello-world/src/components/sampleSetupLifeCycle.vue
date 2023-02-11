<template>

    <div ref="root">this is a root element</div>
</template>
<script>


import {onMounted, ref} from "vue";

export default {

    setup(){
        const root = ref();

       onMounted(()=>{
           console.log(root.value);
       })
        return {root}
    },
};
</script>
<style></style>
