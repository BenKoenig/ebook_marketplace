<template>
    <Link class="link" :class="bg">{{ text }}</Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    bg: {
        default: 'link--yellow'
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


<style lang="scss" scoped>
.link {
    @apply flex;
    @apply px-5;
    @apply h-10;
    @apply justify-center;
    @apply items-center;
    @apply rounded-xl;
    @apply gap-x-2;

    &--yellow {
        @apply bg-yellow-200;
        @apply hover:bg-yellow-100;
        @apply transition-colors;
    }
}
</style>
