<template>
    <div>
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
            <Link :href="prev"
                :class="prev === null ? 'text-gray-100 cursor-default' : 'text-gray-400 cursor-pointer hover:bg-gray-50 focus:z-20 focus:outline-offset-0'"
                class="relative inline-flex items-center rounded-l-md px-2 py-2 ring-1 ring-inset ring-gray-300">
                <span class="sr-only">Previous</span>
                <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
            </Link>

            <a href="#"
                v-for="num in lastPage"
                :key="num"
                :class="currentPage === num ? 'relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' : 'relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0'"
                >{{ num }}</a>

            <Link :href="next"
            :class="next === null ? 'text-gray-100 cursor-default' : 'text-gray-400 cursor-pointer hover:bg-gray-50 focus:z-20 focus:outline-offset-0'"
            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Next</span>
            <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
            </Link>
        </nav>
    </div>
</template>
<script setup>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/20/solid'
import { Link } from '@inertiajs/vue3'
defineProps(['next', 'prev', 'currentPage','lastPage'])
</script>
