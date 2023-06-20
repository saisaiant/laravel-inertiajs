<template>
    <header>
        My App <br />
        <Link href="test" compnent="Test">Test</Link>
        <Link href="about" component="About">About</Link>
        <Link href="login" component="Login">Login</Link>
        <input type="text" name="" placeholder="Search Here">

    </header>
    <slot></slot>
    <Footer />
</template>
<script setup>
import { Link } from '@inertiajs/vue3'

import Footer from '@/components/Footer.vue'
</script>
