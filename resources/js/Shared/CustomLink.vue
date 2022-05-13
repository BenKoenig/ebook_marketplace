<template>
    <Link class="link">{{ text }}</Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    text: {
        default: 'This is a link'
    }
});


</script>


<style lang="scss" scoped>
.link {
    @apply flex;
    @apply px-5;
    @apply h-10;
    @apply justify-center;
    @apply items-center;
    @apply rounded-xl;
    @apply gap-x-2;
    @apply border;
    @apply border-black;
    @apply relative;
    box-shadow: 3px 3px 0px 0.1px #000000;
    @apply transition-all;
    &:hover {
        box-shadow: none;
    }
}
</style>
