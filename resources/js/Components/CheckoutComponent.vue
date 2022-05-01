<template>
    <div class="component--padding rounded-lg bg-beige-400">
        <Headline
            title="Checkout"
            :h1="product.name"
            description="Lorem ipsum dolar set et do it dorum"
            class="component--paddingB"
        />


        <div class="flex flex-col gap-y-3">
            <div class="pattern-2 rounded-lg p-2 border-slate-500 border">
                <img v-bind:src="'../../storage/' + product.cover" v-bind:alt="product.name + ' cover'" class="w-full sm:w-44 rounded-lg col-span-3">

            </div>

            <form @submit.prevent="submit">
                <div class="flex gap-x-1 items-center">
                    <p class="flex items-center bg-white  rounded-xl px-3 h-10">$ {{product.price}}</p>
                    <Button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Pay
                    </Button>
                </div>

            </form>
        </div>


    </div>
</template>

<script setup>
import Headline from "@/Shared/Headline";
import Button from "@/Shared/Button";
import {useForm} from "@inertiajs/inertia-vue3";

const props = defineProps({
    product: Object,
});

const form = useForm({
    user_id: '',
    product_id: '',
});
const submit = () => {
    form.post(route('checkout.store'));
};

</script>
