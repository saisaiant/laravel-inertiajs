<template>
    Test
    <button @click="count++">+</button>
    {{ count }}
    <button @click="count--">-</button>
    <br />
    <Footer />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from "vue";
import Footer from './Footer.vue'
const count = ref(0)
</script>

<style>

</style>
