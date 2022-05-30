<template>
    <Guest>
        <ShowProductComponent :product="product" :reviews="reviews" :userHasPurchased="userHasPurchased" :userHasReviewed="userHasReviewed" :productHasReviews="productHasReviews" :userIsAuthor="userIsAuthor" :errors="errors" :allReviews="all_reviews" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
    reviews: Object,
    all_reviews: Object,
    userHasPurchased: Boolean,
    userHasReviewed: Boolean,
    productHasReviews: Boolean,
    userIsAuthor: Boolean,
    errors: Object,
});

</script>
