<template>
    <div class="w-full py-2 rounded-lg flex justify-center items-center gap-x-2 text-lg ">
        <p v-if="wrenchIcon"><i class="fa-solid fa-wrench"></i></p>
        <p>{{ message }}</p>
    </div>
</template>

<script setup>

const props = defineProps({
    message: String,
    wrenchIcon: Boolean
});

</script>
