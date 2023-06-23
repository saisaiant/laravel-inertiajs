<template>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <button @click="createSite" class="mt-4 block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Site</button>
        <ul role="list" class="divide-y divide-gray-100">
            <li v-for="monitor in monitors.data" :key="monitor.id" class="flex justify-between gap-x-6 py-5">

                <div class="flex gap-x-4">
                    <!-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="monitor.site_name" alt="" /> -->
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ monitor.site_name }}</p>
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ monitor.site_url }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ monitor.response_code }}</p>
                    </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">{{ monitor.role }}</p>
                    <p v-if="monitor.lastSeen" class="mt-1 text-xs leading-5 text-gray-500">
                        Last seen <time :datetime="monitor.lastSeenDateTime">{{ monitor.lastSeen }}</time>
                    </p>
                    <div v-else class="mt-1 flex items-center gap-x-1.5">
                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                            <div class="h-1.5 w-1.5 rounded-full" :class=" monitor.status === 0 ? 'bg-red-500' : ' bg-emerald-500'" />
                        </div>
                        <p class="text-xs leading-5 text-gray-500">{{ monitor.status === 0 ? 'Offline' : 'Online'}}</p>
                    </div>
                </div>
            </li>
        </ul>
        <Paginate
            :next="monitors.next_page_url"
            :prev="monitors.prev_page_url"
            :currentPage="monitors.current_page"
            :lastPage="monitors.last_page"
        />
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3';
import Paginate from '@/components/Paginate.vue'
defineProps(['monitors']);

const createSite = () => {
    router.visit('/site/create')
}
</script>
