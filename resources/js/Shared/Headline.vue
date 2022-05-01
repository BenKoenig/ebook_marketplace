<template>
    <div>
        <!-- Title -->
        <p class="title">{{ title }}</p>

        <!-- Headlines -->
        <!-- h1 -->
        <h1 v-if="h1" class="headline">{{ h1 }}</h1>
        <!-- h2 -->
        <h2 v-if="h2" class="headline">{{ h2 }}</h2>
        <!-- h3 -->
        <h3 v-if="h3" class="headline">{{ h3 }}</h3>

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

<style lang="scss" scoped>
.title {
    @apply text-gray-600;
    @apply mb-3;
    @apply uppercase;
    @apply tracking-widest;
}
.headline {
    /* font size for mobile devices */
    @apply text-4xl;
    /* font size for tablet, laptop, desktop devices */
    @apply md:text-5xl;
    @apply font-bold;
    @apply text-black;
    @apply mb-4;
}
</style>
