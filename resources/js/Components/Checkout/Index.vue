<template>
    <div class="container w-full mx-auto grid grid-cols-2">
        <div class="bg-beige-4 p-5 rounded-lg">
            <h1 class="text-2xl font-bold mb-2">{{product.name}}</h1>
            <img v-bind:src="'../../storage/' + product.cover" v-bind:alt="product.name + ' cover'" class="w-full mb-1 rounded-lg max-w-sm" >
        </div>

        <div>
        </div>



    </div>
</template>

<script>
export default {
    props: ['product']
}
</script>
