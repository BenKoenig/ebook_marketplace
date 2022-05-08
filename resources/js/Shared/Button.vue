<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="btn">
        <slot />
    </button>
</template>

<style lang="scss" scoped>
.btn {
    @apply flex;
    @apply px-5;
    @apply w-fit;
    @apply h-10;
    @apply justify-center;
    @apply items-center;
    @apply rounded-xl;
    @apply gap-x-2;
    @apply transition-colors;
}
</style>
