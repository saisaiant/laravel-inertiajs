<template>
    <MonitorList :monitors="monitors" />
</template>



<script setup>
import MonitorList from "@/components/home/MonitorList.vue"
defineProps(['monitors'])
</script>

<style>

</style>
