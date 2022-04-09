<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FooterComponent from "@/Components/Structure/FooterComponent";
import Create from "@/Components/Reviews/Create";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    product: Object,
    reviews: Object,
    errors: Object,
    username: String,
    userHasReviewed: Array,
})


</script>


<template>

    <Nav :canLogin="canLogin" :canRegister="canRegister"/>
    <ProductDetail :product="product" :reviews="reviews"  />
    <Show class="py-[3.5rem] md:py-[7rem]" :reviews="reviews" />
    <CreateReview  :username="username" :reviews="reviews" :product="product" :errors="errors" :userHasReviewed="userHasReviewed" class="py-[3.5rem] md:py-[7rem]" />
    <FooterComponent class="py-[3.5rem] md:py-[7rem]"/>

</template>


<script>
import ProductDetail from "@/Components/Products";
import CreateReview from "@/Components/Reviews/Create";
import Show from "@/Components/Reviews";
import Nav from "@/Components/Structure/NavigationComponent";




export default {

    components: {
        Nav,
        ProductDetail,
        Show,
        CreateReview

    },
}
</script>


