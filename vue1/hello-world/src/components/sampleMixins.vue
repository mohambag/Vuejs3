<template>
    <ul>
        <li v-for="(item,index) in userNames" :key="index">{{item}}</li>
    </ul>

</template>

<script>
import {userNames} from "@/mixins";

export default {
mixins:[userNames]

}
</script>
<style></style>
