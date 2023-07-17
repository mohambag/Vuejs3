<template>
  <div>
    <h2>{{ title }}</h2>
    <h1 >
404
    </h1>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  setup() {
    const title = ref("Not Found Page");

    return { title };
  },
};
</script>

<style scoped>
p{
    color: red;
}
</style>
