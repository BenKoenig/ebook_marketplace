<template>
    <div class="unapprovedProducts component--padding">
        <Headline
            title="Accept or reject products"
            h1="Products waiting for approval"
            description="Make sure all submissions follow our guidelines"
            class="component--paddingB"
        />

        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-2 py-3">
                        <span class="sr-only">Accept</span>
                    </th>
                    <th scope="col" class="px-2 py-3">
                        <span class="sr-only">Reject</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products" class="border-b odd:bg-white even:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <Link :href="'/e/' + product.slug">{{product.name}}</Link>

                    </th>
                    <td class="px-6 py-4">
                        @{{ product.user.username}}
                    </td>
                    <td class="px-6 py-4">
                        ${{ product.price }}
                    </td>
                    <td class="px-2 py-4 text-right">
                        <form @submit.prevent="accept">
                            <Button type="submit" class="text-black bg-green-300 hover:bg-green-400" v-on:click="getId(product.id)">Accept</Button>
                        </form>
                    </td>
                    <td class="px-2 py-4 text-right">
                        <form @submit.prevent="reject">
                            <Button type="submit" class="text-black bg-red-300 hover:bg-red-400" v-on:click="getId(product.id)">Reject</Button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script setup>
import Headline from "@/Shared/Headline";
import Button from "@/Shared/Button";
import {useForm} from "@inertiajs/inertia-vue3";
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

<style lang="scss" scoped>
.unapprovedProducts {
    @apply bg-beige-400;
    @apply rounded-2xl;
}

</style>
