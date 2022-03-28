
<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    product: Object,
})
</script>




<template>
    <Head title="Discover eBooks" />
    <Nav :canLogin="canLogin" :canRegister="canRegister"/>
    <DailySnippet class="py-[3.5rem] md:py-[5.5rem]" :product="product"/>
    <Footer class="py-[3.5rem] md:py-[7rem]"/>



</template>



<script>
// import { Head } from '@inertiajs/inertia-vue3'
import Nav from "@/Components/Structure/NavigationComponent";
import Footer from "@/Components/Structure/FooterComponent";
import DailySnippet from "@/Components/Products/DailySnippetComponent";


export default {

    components: {
        Nav,
        Footer,
        DailySnippet,
    },
}
</script>

