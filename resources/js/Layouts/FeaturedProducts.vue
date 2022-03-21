<template>
    <div class="relative flex flex-col items-center justify-center overflow-hidden">

        <Headline first-headline="Must-Reads!" second-headline="Featured eBooks"></Headline>

        <div class="relative grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 xl:mx-0  max-w-8xl mx-auto gap-2  w-full px-2 xl:px-0">


            <div v-for="product in products" :key="product.id">
                <MdProductCard  v-bind:title="product.name"  v-bind:authorName="product.user.name" v-bind:coverUrl="asdasd" />
            </div>
        </div>
    </div>
</template>





<script>
import MdProductCard from "../Partials/Cards/MdProductCard";
import Headline from "@/Partials/Headline";


export default {
    name: 'App',
    components: {
        Headline,
        MdProductCard,
    },
    props: ['products'],
}
</script>
