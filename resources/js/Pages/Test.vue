<template>
    <Layout>
        Test
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
    </Layout>
</template>

<script setup>
import { ref } from "vue";
import Layout from '@/components/Layout.vue'
const count = ref(0)
</script>

<style>

</style>
