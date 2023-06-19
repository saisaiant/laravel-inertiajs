<template>
    Test
    <button @click="count++">+</button>
    {{ count }}
    <button @click="count--">-</button>
    <Link href="test">Test</Link>
    <Link href="about">About</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from "vue";

const count = ref(0)
</script>

<style>

</style>
