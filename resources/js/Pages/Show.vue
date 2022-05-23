<template>
    <Guest>
        <ShowProductComponent :product="product" :reviews="reviews" :userHasPurchased="userHasPurchased" :userHasReviewed="userHasReviewed" :productHasReviews="productHasReviews" :userIsAuthor="userIsAuthor" :errors="errors" />
    </Guest>
</template>


<script setup>

import Guest from "@/Layouts/Guest";
import ShowProductComponent from "@/Components/ShowProductComponent";

const props = defineProps({
    product: Object,
    reviews: Object,
    userHasPurchased: Boolean,
    userHasReviewed: Boolean,
    productHasReviews: Boolean,
    userIsAuthor: Boolean,
    errors: Object,
});

</script>
