<template>
    <Link class="btn" :class="bg">{{ text }}</Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    bg: {
        default: 'btn--yellow'
    },
    text: {
        default: 'This is a link'
    }
});

/*const colorClasses = computed(() => {
    if (props.bg === 1) {
        return 'btn--yellow';
    }
});*/

</script>


<style scoped>
.btn {
    @apply flex;
    @apply px-5;
    @apply w-fit;
    @apply h-10;
    @apply justify-center;
    @apply items-center;
    @apply rounded-xl;
    @apply gap-x-2;
}

.btn--yellow {
    @apply bg-yellow-200;
    @apply hover:bg-yellow-100;
    @apply transition-colors;
}
</style>
