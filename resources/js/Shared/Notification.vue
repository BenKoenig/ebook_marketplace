<template>
    <div class="w-full py-2 flex justify-center items-center gap-x-2 text-lg border-b border-black bg-yellow-50">
        <p class="flex justify-center items-center gap-x-2 "><slot /></p>
    </div>
</template>

<script setup>

const props = defineProps({
    wrenchIcon: Boolean
});

</script>
