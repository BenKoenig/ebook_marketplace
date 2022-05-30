<script setup>
import gsap from 'gsap'
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ref } from 'vue'
gsap.registerPlugin(ScrollTrigger);

const show = ref(true)

function beforeEnter(el) {
    el.style.opacity = '0'
    el.style.transform = 'translateY(-7px)'
}


function enter (el) {
    gsap.to(el, {
        scrollTrigger: el,
        start: "top 100px",
        duration: 0.2,
        delay: 0.2,
        top: 0,
        opacity: 1,
        y: 0,
    })
}

const props = defineProps({
    title: String,
    h1: String,
    h2: String,
    h3: String,
    description: String
});

</script>

<template>
    <div>
        <!-- Title -->
        <p class="title">{{ title }}</p>

        <!-- Headlines -->
        <!-- h1 -->
        <Transition appear @before-enter="beforeEnter" @enter="enter">
            <h1 v-if="h1" class="headline">{{ h1 }}</h1>
        </Transition>

        <!-- h2 -->
        <Transition appear @before-enter="beforeEnter" @enter="enter">
            <h2 v-if="h2" class="headline">{{ h2 }}</h2>
        </Transition>

        <!-- h3 -->
        <Transition appear @before-enter="beforeEnter" @enter="enter">
            <h3 v-if="h3" class="headline">{{ h3 }}</h3>
        </Transition>

        <!-- Description -->
        <p v-if="description" class="text-gray-5">{{ description }} </p>
    </div>
</template>

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


/*
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
*/

</style>
