<template>
    <div>

        <p v-if="userHasPurchased == true">TRUE</p>

        <Notification v-if="product.is_public === 0" class="bg-white border border-black text-black mb-1 text-xl" message="This product is currently under review. Please be patient." :wrench-icon=true></Notification>


        <div class="sm:grid sm:grid-cols-12 gap-x-5 md:gap-x-7 lg:gap-x-9 xl:gap-x-11 rounded-lg component--padding bg-beige-400">
            <div class="sm:sticky sm:top-1 h-fit  w-full sm:col-span-5 xl:col-span-3 sm:order-2  mx-auto relative">

                <!-- Displays book cover -->
                <img v-bind:src="'../storage/' + product.cover" class="w-full mb-1 rounded-lg" v-bind:alt="product.name + ' cover'" >

                <div class="flex gap-1">
                    <CustomLink
                        :href="'/e/' + product.slug + '/checkout'"
                        text="Buy"
                        class="w-full"
                    />
                </div>
            </div>

            <div class="w-full sm:col-span-7 xl:col-span-9  sm:order-1">

                <Headline
                    title="Product Overview"
                    :h1="product.name"
                    description="Lorem ipsum dolar set et do"
                    class="component--paddingB"
                />

                <div class="xl:flex grid   items-center   mb-7 flex-wrap">
                    <p class="text-xl py-3 px-4 border-[1px] border-black h-full flex items-center bg-yellow-100 rounded-tl-lg rounded-tr-lg xl:rounded-tr-none xl:rounded-l-lg"><!--<i class="fa-solid fa-tag"></i>-->$ {{ product.price }}</p>
                    <p class="text-xl py-3 px-4  border-[1px] border-black  h-full flex items-center ">@{{ product.user.username }}</p>
                    <div class="flex py-3 px-4 gap-x-1 items-center  text-xl   border-[1px] border-black h-full">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> {{ reviews.total }} Reviews </p>
                    </div>
                    <p class="text-xl py-3 px-4 border-[1px] h-full border-black flex items-center rounded-bl-lg rounded-br-lg xl:rounded-bl-none  xl:rounded-r-lg gap-x-2  "><i class="fa-solid fa-cart-shopping"></i> 53 Purchases</p>

                </div>
                <p class="pb-7">{{product.short_description}}</p>
                <div class="pattern-2 border-[1px] border-black py-10 px-2 md:px-10  relative  rounded-lg">
                    <svg class="absolute  -bottom-6 right-1 lg:right-4 h-[4.5rem]" viewBox="0.5 1 323.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>
                    <p class="text-xl md:text-3xl ">“{{product.snippet}}“</p>

                </div>
                <div class="unreset">
                    <p  v-html="product.description">
                    </p>
                </div>

            </div>
        </div>

        <div class="component--padding ">
            <h3 class="font-bold text-3xl md:text-4xl ">Heres what buyers have to say.</h3>
            <ul id="reviews" class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1  py-7">
                <li v-for="review in reviews.data" :key="review.id"  class="bg-white  rounded-lg" >
                    <div class="bg-yellow-100 border-b-[1px] border-black rounded-t-lg text-center flex items-center gap-x-2 px-2">
                        <svg class="w-10" viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="80" height="80"><title>Katharine Lee</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#ffad08"></rect><rect x="0" y="0" width="36" height="36" transform="translate(7 7) rotate(297 18 18) scale(1)" fill="#73b06f" rx="6"></rect><g transform="translate(3.5 3.5) rotate(7 18 18)"><path d="M13,19 a1,0.75 0 0,0 10,0" fill="#000000"></path><rect x="12" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="22" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                        <p>@{{ review.user.username }}</p>
                        <p> | </p>

                        <div class="flex">
                            <div v-for="review in review.rating">
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-2">
                        <div>


                        </div>

                        <p class="text-xl font-bold mb-2">{{ review.title }}</p>
                        <p class="text-lg">{{ review.review }}</p>

                    </div>

                </li>
            </ul>

            <Pagination class="mt-3" :links="reviews.links" />

        </div>

        <div v-if="!userHasReviewed.length && userHasPurchased == true" class="component--padding">
            <h3 class="font-bold text-3xl md:text-4xl  component--paddingB">You have purchased this ebook. Share your experience.</h3>

            <form @submit.prevent="submit"  novalidate>
                <div class="mb-4">
                    <Label for="title" value="Title"></Label>
                    <Input id="title" type="text" class="mt-1 block w-full  " v-model="form.title" required />
                    <p v-if="errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.title }}</p>
                </div>

                <div class="mb-4">
                    <Label for="review" value="Review"></Label>
                    <textarea id="review" v-model="form.review" rows="4" class="rounded-lg bg-white border border-slate-500 text-gray-900 text-sm  focus:ring-indigo-200 focus:ring-opacity-50 focus:ring block w-full p-2.5" placeholder="Review this ebook"></textarea>
                    <p v-if="errors.review" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.review }}</p>
                </div>


                <div class="mb-4">
                    <Label for="rating" value="Rating"></Label>
                    <Input id="rating" type="text" class="mt-1 block w-full  " v-model="form.rating" required />
                    <p v-if="errors.rating" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.rating }}</p>
                </div>

                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Submit Review
                </Button>
            </form>



        </div>

    </div>
</template>

<script setup>
import CustomLink from "@/Shared/CustomLink";
import Pagination from "@/Shared/Pagination";
import Headline from "@/Shared/Headline";
import { useForm } from '@inertiajs/inertia-vue3';
import Label from "@/Shared/Label";
import Input from "@/Shared/Input";
import Button from "@/Shared/Button";
import Notification from "@/Shared/Notification";


const props = defineProps({
    product: Object,
    reviews: Object,
    userHasPurchased: Array,
    userHasReviewed: Array,
    errors: Object
});

const form = useForm({
    title: '',
    review: '',
    rating: '',
});
const submit = () => {
    form.post('/reviews');
};
</script>
