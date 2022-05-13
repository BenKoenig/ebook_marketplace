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
    @apply h-10;
    @apply justify-center;
    @apply items-center;
    @apply rounded-xl;
    @apply gap-x-2;
    @apply border;
    @apply border-black;
    @apply relative;
    box-shadow: 3px 3px 0px 0.1px #000000;
    transition: box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
    &:hover {
        box-shadow: none;
    }
}
</style>
