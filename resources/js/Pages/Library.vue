<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Hero from "@/Layouts/Hero";
import Nav from "@/Layouts/Nav";
import Steps from "@/Layouts/Steps";
import FeaturedProducts from "@/Layouts/FeaturedProducts";
import Banner from "@/Layouts/Banner";
import Footer from "@/Layouts/Footer";
import Headline from "@/Partials/Headline";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />

    <!--    <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                    Dashboard
                </Link>

                <template v-else>
                    <Link :href="route('login')" class="text-sm text-gray-700 underline">
                        Log in
                    </Link>

                    <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                        Register
                    </Link>
                </template>
            </div>


        </div>-->

    <Nav />
    <FeaturedProducts class="pb-[3.5rem] md:py-[5.5rem]"/>
    <Footerpy class="py-[3.5rem] md:py-[7rem]"/>


</template>
