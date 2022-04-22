<template>
    <div class="relative flex flex-col items-center justify-center  ">

        <Headline first-headline="Must-Reads!" second-headline="Featured eBooks"></Headline>

        <div class="relative grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 xl:mx-0  max-w-8xl mx-auto gap-2  w-full px-2 xl:px-0">
            <div v-for="product in products" :key="product.id">
                <MdProductCard  v-bind:title="product.name"  v-bind:authorName="product.user.username" v-bind:coverUrl="product.cover"  />
            </div>
        </div>
    </div>
</template>


<script>
import MdProductCard from "../../Partials/Cards/MdProductCard";
import Headline from "@/Partials/Headline";


export default {
    components: {
        Headline,
        MdProductCard,
    },
    props: ['products'],
}
</script>
