<template>
    <div class="rounded-2xl component--padding">

        <!-- start of headline -->
        <Headline
            title="All your previous purchased ebooks"
            h1="Previous Orders"
            description="Heres a list of all of your previous purchased ebooks"
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
                        Author
                    </th>

                    <!-- price headline -->
                    <th scope="col" class="px-6 py-3">
                        Paid
                    </th>

                    <!-- accept headline -->
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>


                </tr>
                </thead>
                <tbody>
                <tr v-for="order in orders" class="border-b odd:bg-white even:bg-gray-50">

                    <!-- product name and link to product page -->
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <Link :href="'/e/' + order.slug">{{order.name}}</Link>
                    </th>

                    <!-- username from author & link to their profile page -->
                    <td class="px-6 py-4">
                        
                        <Link :href="'/u/' + order.username">{{ order.username }}</Link>
                    </td>

                    <!-- product price -->
                    <td class="px-6 py-4">
                        ${{ Number((order.purchased_price).toFixed(2)) }}
                    </td>

                    <!-- accept data -->
                    <td class="px-6 py-4">
                        {{ moment(order.created_at).format("MMM Do YY")    }}
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
import { Link } from '@inertiajs/inertia-vue3';
import moment from 'moment';

const props = defineProps({
    orders: Object,
});
</script>
