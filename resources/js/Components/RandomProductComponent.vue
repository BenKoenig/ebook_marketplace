<template>
    <div class="rand component--padding">
        <!-- Start of headline - '/Shared/Headline.vue'-->
        <Headline
            title="The daily Feature"
            h2="Highlighted Ebook of the Day"
            description="Take a look at this highlighted ebook of the day."
            class="component--paddingB"
        />
        <!-- End of headline -->

        <!-- Start of daily feature -->
        <div class="rand__grid">

            <!-- Start of snippet card -->
            <div class="rand__grid__item">
                <svg class="rand__grid__item__svg rand__grid__item__svg--top" viewBox="0 1 324.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>

                <p class="rand__grid__item__p">{{ product.snippet }}</p>
            </div>
            <!-- End of snippet card -->

            <!-- Start of product card -->
            <ProductCard
                :product="product"
                class="lg:col-span-4"
            />
            <!-- End of product card -->

            <!-- Start of about card -->
            <div class="rand__grid__item">
                <svg class="rand__grid__item__svg rand__grid__item__svg--bottom" viewBox="0 1 263.08 116"><text transform="translate(1 93)" fill="#fff" stroke="#000" font-size="92" font-family="Outfit" font-weight="700"><tspan x="0" y="0">About</tspan></text></svg>

                <p class="rand__grid__item__p">{{ product.short_description}}</p>
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

<style lang="scss" scoped>
.rand {
    @apply bg-beige-400;

    &__grid {
        @apply grid;
        @apply grid-cols-1;
        @apply lg:grid-cols-12;
        @apply gap-2;

        /* Snippet, Product & About Card*/
        &__item {
            @apply relative;
            @apply flex;
            @apply items-center;
            @apply border;
            @apply border-slate-500;
            @apply bg-white;
            @apply p-1;
            @apply lg:col-span-4;

            &__p {
                @apply text-lg;
                @apply px-2;
                @apply py-10;
                @apply md:px-3;
                @apply md:py-0;
                @apply lg:px-5;
            }

            /* SVG */
            &__svg {
                @apply absolute;
                @apply h-[3.8rem];
                @apply md:h-[4.5rem];

                &--top {
                    @apply -top-6;
                    @apply left-1;
                    @apply lg:left-4;
                }

                &--bottom {
                    @apply -bottom-6;
                    @apply right-1;
                    @apply lg:right-4;
                }
            }
        }
    }
}
</style>
