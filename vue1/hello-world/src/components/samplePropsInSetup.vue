<template>
    <div>{{namePro}}</div>
</template>

<script>

export default {
    props: ['name'],
    setup(props) {
        console.log(props);

        return {}
    },
};
</script>

<style>

</style>
