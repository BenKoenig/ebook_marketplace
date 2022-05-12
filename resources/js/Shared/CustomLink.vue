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

}
</style>
