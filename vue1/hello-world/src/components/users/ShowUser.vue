<template>
    <div>
        <h2> {{ title }},</h2>
        <h2>{{ route.params }}</h2>
        <h5>{{route.query.name}} {{route.query.lastname}}</h5>
    </div>
</template>

<script>
import {ref} from "vue";
import {useRoute} from "vue-router";

export default {
    setup() {
        const title = ref("Show User");
        const route = useRoute();
        return {title, route};
    },
};
</script>

<style scoped>
</style>
