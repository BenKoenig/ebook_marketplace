<template>
    <div>
        <!-- Title -->
        <p class="text-gray-5 mb-3 uppercase tracking-widest">{{ title }}</p>

        <!-- Headlines -->
        <!-- h1 -->
        <h1 v-if="h1" class="text-5xl font-bold text-black mb-4">{{ h1 }}</h1>
        <!-- h2 -->
        <h2 v-if="h2" class="text-5xl font-bold text-black mb-4">{{ h2 }}</h2>
        <!-- h3 -->
        <h3 v-if="h3" class="text-5xl font-bold text-black mb-4">{{ h3 }}</h3>

        <!-- Description -->
        <p class="text-gray-5">{{ description }} </p>
    </div>
</template>

<script setup>

const props = defineProps({
    title: String,
    h1: String,
    h2: String,
    h3: String,
    description: String
});

</script>
