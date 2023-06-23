<template>
    <Head title="Inertia Js"></Head>
    <Navbar />
    <slot></slot>
    <Footer />
</template>
<script setup>
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
import { Head } from '@inertiajs/vue3'
</script>
