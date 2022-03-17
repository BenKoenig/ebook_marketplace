
<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    product: Object,
    users: Object,
})
</script>




<template>
    <!-- <Head title="Welcome" /> -->

    <Nav :canLogin="canLogin" :canRegister="canRegister"/>
    <DailySnippet class="py-[3.5rem] md:py-[5.5rem]" :product="product" :users="users"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>



</template>



<script>
// import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Layouts/Nav";
import Footer from "@/Layouts/Footer";
import DailySnippet from "@/Layouts/DailySnippet";


export default {

    components: {
        Nav,
        Footer,
        DailySnippet,
    },
}
</script>

