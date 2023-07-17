<template>
    <div>
        <h2>{{ title }}</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel a
            asperiores! Suscipit maxime in dolorem excepturi sequi voluptates,
            pariatur quas commodi neque quis repudiandae a natus cum, quo non?
        </p>
    </div>

    <router-link :to="{name:'showUser',params:{'id':3}}">Go to Usernumber3</router-link>
    <button @click="goToShowUser()">go to show user 5</button>
    <hr>
    <router-view></router-view>
</template>

<script>
import {ref} from "vue";
import {useRouter} from "vue-router";

export default {
    // beforeRouteEnter(to, from, next) {
    //     console.log('Before Route Enter');
    //     next
    // },

    setup() {
        const title = ref("User Page");
        const router = useRouter();

        function goToShowUser() {
            router.push({name: "showUser", params: {"id": 5}, query: {name: 'mohammad', lastname: 'Bagri'}})
        }

        return {title, goToShowUser};
    },
};
</script>

<style scoped>
p {
    color: red;
}
</style>
