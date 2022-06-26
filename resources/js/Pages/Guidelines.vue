<template>
    <Guest>
        <Head title="Guidelines" />

        <div class="component--padding">
            <Headline
            title="Please follow the guidelines"
            h1="Product Guidelines"
            description="To ensure quality standards, we have guidelines"
            class="component--paddingB"
            />

            <div class="mb-3">
                <h2 class="text-2xl font-bold">
                    Product must feature technologies which are up-to-date
                </h2>
                <ol class="list-decimal list-inside">
                    <li>The technologies must be up-to-date</li>
                </ol>
            </div>

            <div class="mb-3">
                <h2 class="text-2xl font-bold">
                    The ebook must have at least 20,000 words
                </h2>
                <ol class="list-decimal list-inside">
                    <li>Your ebook can't be shorter in length than 20,000 words.</li>

                </ol>
            </div>

            <div class="mb-3">
                <h2 class="text-2xl font-bold">
                    Lorem ipsum
                </h2>
                <ol class="list-decimal list-inside">
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</li>
                </ol>
            </div>
        </div>
        
        
    </Guest>

</template>

<script setup>
import Guest from "@/Layouts/Guest";
import Headline from "@/Shared/Headline";
import { Head } from '@inertiajs/inertia-vue3';
</script>
