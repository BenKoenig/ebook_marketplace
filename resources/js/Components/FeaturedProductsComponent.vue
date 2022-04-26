<template>
    <div class="bg-beige-400 rounded-2xl component--padding">
        <Headline
            title="See the light"
            h2="What's featured"
            description="Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis"
            class="component--paddingB"
        />

        <!-- start of product list -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-2">
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
});

</script>
