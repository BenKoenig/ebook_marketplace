<script setup>
import { Link } from '@inertiajs/inertia-vue3';

</script>


<template>

<div class=" relative bg-hills-mobile md:bg-hills-desktop bg-cover bg-no-repeat">


    <div class="relative py-14 px-2 max-w-2xl mx-auto">
        <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-black mb-2 text-center">Ebook Marketplace for Developers</h1>
        <p class="text-gray-8 mb-5 text-center">Lorem ipsum dolor sit amet, consectetuer magnis dis penatibus et magnis dis sociis natoque adipiscing elit. Aenean bus et magnis discommodo sociis natoque. </p>
        <Link href="/register" class="bg-yellow-5 text-lg flex px-5 w-fit h-10 justify-center items-center rounded-3xl font-bold mx-auto gap-x-2">
            <i class="fa-solid fa-arrow-right-long"></i> Get started
        </Link>

    </div>


</div>

</template>


<script>
import CustomLink from "@/Partials/CustomLink";
import NavigationComponent from "@/Components/Structure/Nav";
export default {
    components: {NavigationComponent, CustomLink}
}
</script>
