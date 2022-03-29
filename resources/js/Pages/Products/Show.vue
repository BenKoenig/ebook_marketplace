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






    <ProductDetail :product="product" :reviews="reviews"/>
</template>


<script>
import ProductDetail from "@/Components/Products/DetailComponent";
import Nav from "@/Components/Structure/NavigationComponent";




export default {

    components: {
        Nav,
        ProductDetail,
    },
}
</script>


