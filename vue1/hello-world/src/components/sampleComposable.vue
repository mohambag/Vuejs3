<template>

    <div>{{ count }}</div>
    <button @click="increment">increment</button>

</template>

<script>
import {useCounter} from "@/composable/useCounter";
import {ref} from "vue";

export default {
    setup() {
        const counter=ref(2);
        const {count, increment} = useCounter(counter)
        return {count, increment}
    },
}
</script>

<style></style>
