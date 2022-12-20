<template>
  <Link href="/listing">Listings</Link>&nbsp;
  <Link href="/listing/create">New Listing</Link>
  <!-- <div>The page with time {{ timer }}</div> -->
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default</slot>
</template>


<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

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
