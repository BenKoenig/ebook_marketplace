<script setup>
import Guest from "@/Layouts/Guest";
import ProductCard from "@/Shared/ProductCard";
import Headline from "@/Shared/Headline";
import Pagination from "@/Shared/Pagination";


const props = defineProps({
    products: Object,
});

function filteredList() {
  return props.products.filter((product) =>
    product
  );
}

</script>

<template>
    <Guest>
        <div class="component--padding">

            <Headline
                title="View all products"
                h1="All Products"
                description="Everything is marketplace has to offer"
                class="within--paddingB"
            />

            <!-- start of product container -->
            <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 ">

                <!-- start of product loop -->
                <div v-for="product in products.data" :key="product.id"  class="bg-white rounded-lg overflow-hidden" >
                    <ProductCard :product="product" />
                </div>
                <!-- end of product loop -->

            </div>
            <!-- end of product container -->

            <Pagination class="mt-10 " :links="products.links" />


        </div>
    </Guest>
</template>