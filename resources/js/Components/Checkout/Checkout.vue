<template>
    <div class="container w-full mx-auto grid grid-cols-2">
        <div class="bg-beige-4 p-5 rounded-lg">
            <h1 class="text-2xl font-bold mb-2">{{product.name}}</h1>
            <img v-bind:src="'../../storage/' + product.cover" v-bind:alt="product.name + ' cover'" class="w-full mb-1 rounded-lg w-36" >
            <p>{{product.price}}</p>
        </div>

        <div>
            <form @submit.prevent="submit">

                <Button :type="submit">Buy</Button>


            </form>

        </div>



    </div>
</template>

<script>
/*import {Inertia} from "@inertiajs/inertia";*/

import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import Button from "@/Partials/Button";

export default {
    components: {Button},
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
