<template>
    <div class="bg-beige-400 rounded-2xl component--padding">

        <!-- start of headline -->
        <Headline
            title="Accept or reject products"
            h1="Products waiting for approval"
            description="Make sure all submissions follow our guidelines"
            class="component--paddingB"
        />
        <!-- end of headline -->

        <div class="relative overflow-x-auto shadow-md rounded-lg">

            <!-- start of table -->
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>

                    <!-- product name headline -->
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>

                    <!-- username headline -->
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>

                    <!-- price headline -->
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>

                    <!-- accept headline -->
                    <th scope="col" class="px-2 py-3">
                        <span class="sr-only">Accept</span>
                    </th>

                    <!-- reject headline -->
                    <th scope="col" class="px-2 py-3">
                        <span class="sr-only">Reject</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products" class="border-b odd:bg-white even:bg-gray-50">

                    <!-- product name and link to product page -->
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <Link :href="'/e/' + product.slug">{{product.name}}</Link>
                    </th>

                    <!-- username from author & link to their profile page -->
                    <td class="px-6 py-4">
                        <Link :href="'/u/' + product.user.username">@{{ product.user.username}}</Link>
                    </td>

                    <!-- product price -->
                    <td class="px-6 py-4">
                        ${{ product.price }}
                    </td>

                    <!-- accept data -->
                    <td class="px-2 py-4 text-right">
                        <form @submit.prevent="accept">
                            <Button type="submit" class="text-black bg-green-300 hover:bg-green-400" v-on:click="getId(product.id)">Accept</Button>
                        </form>
                    </td>

                    <!-- reject data -->
                    <td class="px-2 py-4 text-right">
                        <form @submit.prevent="reject">
                            <Button type="submit" class="text-black bg-red-300 hover:bg-red-400" v-on:click="getId(product.id)">Reject</Button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- end of table -->
        </div>
    </div>

</template>

<script setup>
import Headline from "@/Shared/Headline";
import Button from "@/Shared/Button";
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    products: Object,
});

let productId = null;

/* gets product id when user clicks on a btn */
const getId = (id) => {
    return productId = id;
}

/* accepts product */
const accept = () => {
    useForm().post(`/accept/${productId}`);
};

/* declines product */
const reject = () => {
    useForm().post(`/reject/${productId}`);
};
</script>
