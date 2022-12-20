<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/hello">Show Page</Link>
  <!-- <div>The page with time {{ timer }}</div> -->
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <div>{{ y }}</div>
  <slot>Default</slot>
</template>


<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { ref, computed } from 'vue';

const x = ref(0);
const y = computed(() => x.value * 2);
// page.props.value.flash.success
const page = usePage();
const flashSuccess = computed(
  () => page.props.value.flash.success,
);
// import { ref } from 'vue'

// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>

<style scoped>
    .success {
        background-color: green;
        color: white;
    }
</style>
