

<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap">
            <template v-for="(link, key) in links">
                <div v-if="link.url === null" :key="key" class="mr-1 px-4 py-3 text-gray-400 text-sm leading-4 border rounded" v-html="link.label" />
                <Link v-else preserve-scroll :key="`link-${key}`"  class="mr-1 px-4 py-3 focus:text-indigo-500 text-sm leading-4 hover:bg-gray-100 border focus:border-indigo-500 rounded" :class="{ 'bg-gray-100': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>


<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    links: Array
});

</script>

