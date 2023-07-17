<template>
    <div>
        <h2>{{ title }}</h2>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel a
            asperiores! Suscipit maxime in dolorem excepturi sequi voluptates,
            pariatur quas commodi neque quis repudiandae a natus cum, quo non?
        </p>

        <h3>{{ route.params }}</h3>
    </div>
</template>

<script>
import {ref} from "vue";
import {useRoute, useRouter} from "vue-router";

export default {
    setup() {
        const title = ref("Post Page");

        const route = useRoute();
        const router = useRouter();
        console.log(route.params, router);



        return {title, route};
    },
};
</script>

<style scoped>
</style>
