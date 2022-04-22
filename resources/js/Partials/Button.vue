g<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="bg-yellow-100 border-[1px] border-black text-lg flex w-full h-10 justify-center items-center rounded-lg text-black">
        <slot />
    </button>
</template>
