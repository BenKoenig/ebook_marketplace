<template>
    <div class="c component--padding">
        <Headline
            :title="title"
            :h1="h1"
            :h2="h2"
            :h3="h3"
            :description="description"
            class="within--paddingB"
        />

        <!-- start of product list -->
        <div class="c__grid">
            <div v-for="product in products" :key="product.key" >
                <ProductCard :product="product" />
            </div>
        </div>
        <!-- end of product list -->

    </div>
</template>

<script setup>
import ProductCard from "@/Shared/ProductCard";
import Headline from "@/Shared/Headline";

const props = defineProps({
    products: Object,
    title: String,
    h1: String,
    h2: String,
    h3: String,
    description: String,
    });

</script>

<style lang="scss" scoped>
.c {
    @apply rounded-2xl;

    &__grid {
        @apply grid;
        /* Mobile Media Query */
        @apply grid-cols-1;
        /* Tablet Media Query */
        @apply sm:grid-cols-2;
        /* Desktop Media Query */
        @apply xl:grid-cols-3;
        @apply gap-4;
    }
}

</style>
