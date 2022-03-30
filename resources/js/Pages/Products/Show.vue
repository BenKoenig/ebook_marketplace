<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FooterComponent from "@/Components/Structure/FooterComponent";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    product: Object,
    reviews: Object
})


</script>


<template>
    <Nav :canLogin="canLogin" :canRegister="canRegister"/>


    <ProductDetail :product="product" />
    <Show class="py-[3.5rem] md:py-[7rem]" :reviews="reviews" />
    <FooterComponent class="py-[3.5rem] md:py-[7rem]"/>

</template>


<script>
import ProductDetail from "@/Components/Products/Show";
import Show from "@/Components/Reviews/Show";
import Nav from "@/Components/Structure/NavigationComponent";




export default {

    components: {
        Nav,
        ProductDetail,
        Show,

    },
}
</script>


