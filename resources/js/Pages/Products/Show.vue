<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    product: Object,
})


</script>


<template>
    <Nav :canLogin="canLogin" :canRegister="canRegister"/>

    <ProductDetail :product="product" />
</template>


<script>
import ProductDetail from "@/Components/ProductDetail";
import Nav from "@/Components/NavigationComponent";
export default {

    components: {
        Nav,
        ProductDetail,
    },
}
</script>
