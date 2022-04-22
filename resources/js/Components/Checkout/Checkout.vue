<template>
    <div class="container w-full mx-auto grid grid-cols-2">
        <div class="bg-beige-4 p-5 rounded-lg">
            <h1 class="text-2xl font-bold mb-2">{{product.name}}</h1>
            <img v-bind:src="'../../storage/' + product.cover" v-bind:alt="product.name + ' cover'" class="w-full mb-1 rounded-lg w-36" >
            <p>{{product.price}}</p>
        </div>

        <div>
            <form @submit.prevent="submit">
<!--                <Button :type="submit">Pay</Button>-->


                <button type="submit" class="rounded-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

            </form>

        </div>



    </div>
</template>

<script>
/*import {Inertia} from "@inertiajs/inertia";*/

import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
    props: ['product'],



    setup () {
        const form = reactive({
            user_id: null,
            product_id: null,

        })

        function submit() {
            Inertia.post(`/checkout/` , form, {
                forceFormData: true,
            })
        }

        return { form, submit }
    },

}
</script>
