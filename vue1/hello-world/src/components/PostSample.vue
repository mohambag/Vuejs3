<template>
    <div>
        <h2>{{ title }}</h2>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel a
            asperiores! Suscipit maxime in dolorem excepturi sequi voluptates,
            pariatur quas commodi neque quis repudiandae a natus cum, quo non?
        </p>
        <button v-on:click="routeHome()">Home</button>
        <router-view></router-view>

        <hr>
    </div>
</template>

<script>
import {ref} from "vue";
import {useRouter} from "vue-router";


export default {
    setup() {
        const title = ref("Post Page");
        const router = useRouter();

        function routeHome() {
            router.push('/');
        }

        return {title, routeHome};
    },
};
</script>

<style scoped>
</style>
