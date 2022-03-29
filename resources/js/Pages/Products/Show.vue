<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';


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
    <Show :reviews="reviews" />

</template>


<script>
import ProductDetail from "@/Components/Products/ViewComponent";
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


