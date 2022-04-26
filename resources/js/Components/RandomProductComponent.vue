<template>
    <div class="bg-beige-400 rounded-2xl component--padding">

        <!-- Start of headline - '/Shared/Headline.vue'-->
        <Headline
            title="The daily Feature"
            h2="Highlighted Ebook of the Day"
            description="Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis"
            class="component--paddingB"
        />
        <!-- End of headline -->

        <!-- Start of daily feature -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-2">

            <!-- Start of snippet card -->
            <div class="border-2 border-slate-500 bg-slate-200 rounded-2xl p-1 lg:col-span-4 flex items-center relative">
                <svg class="absolute -top-6 left-1 lg:left-4 h-[3.8rem] md:h-[4.5rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 324.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>

                <p class="text-lg px-2 py-10 md:px-3 md:py-0 lg:px-5">{{ product.snippet }}</p>
            </div>
            <!-- End of snippet card -->

            <!-- Start of product card -->
            <ProductCard
                :product="product"
                class="lg:col-span-4"
            />
            <!-- End of product card -->

            <!-- Start of about card -->
            <div class="border-2 border-slate-500 bg-slate-200 rounded-2xl p-1  lg:col-span-4 flex items-center relative">
                <svg class="absolute h-[3.8rem] md:h-[4.5rem] -bottom-6  right-1 lg:right-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 263.08 116"><text transform="translate(1 93)" fill="#fff" stroke="#000" font-size="92" font-family="Outfit" font-weight="700"><tspan x="0" y="0">About</tspan></text></svg>

                <p class="text-lg p-2 py-10 md:px-3 md:py-0 lg:px-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div>
            <!-- End of about card -->

        </div>
        <!-- End of daily feature -->

    </div>
</template>

<script setup>
import ProductCard from "@/Shared/ProductCard";
import Headline from "@/Shared/Headline";

const props = defineProps({
    product: Object,
});

</script>
