<template>
    <div>
        <div class="sm:grid sm:grid-cols-12 gap-x-5 md:gap-x-7 lg:gap-x-9 xl:gap-x-11  component--padding bg-beige-400">
            <div class="sm:sticky sm:top-1 h-fit  w-full sm:col-span-5 xl:col-span-3 sm:order-2  mx-auto relative">

                <!-- Displays book cover -->
                <img v-bind:src="'../storage/' + product.cover" class="w-full mb-1" v-bind:alt="product.name + ' cover'" >

                <div class="flex gap-1 mb-7 md:mb-0">

                    <!-- Buy link -->
                    <CustomLink
                        :href="'/e/' + product.slug + '/checkout'"
                        text="Buy"
                        class="w-full bg-orange-400 hover:bg-orange-300 text-white"
                        v-if="!userHasPurchased"
                    />

                    <!-- when user has purchased the ebook
                    it gives them the option to read it
                    or if they are the author to edit it  -->
                    <div class="w-full bg-white p-2 mt-1" v-if="userHasPurchased">
                        <p class="text-black text-center pb-1">Ebook is already in your library</p>
                        <div class="flex gap-x-2">
                            <CustomLink
                                :href="'/read/' + product.slug"
                                text="Read"
                                class="w-full bg-yellow-200 "
                            />
                            <CustomLink
                                v-if="$page.props.auth.user ? $page.props.auth.user.id === product.user_id : false"
                                :href="'/edit/' + product.slug"
                                text="Edit"
                                class="w-full"
                            />
                        </div>

                    </div>

                </div>
            </div>

            <div class="w-full sm:col-span-7 xl:col-span-9  sm:order-1">

                <div v-if="product.is_public === 0" class="bg-white border border-black text-black text-xl  flex justify-center items-center py-3 px-2 mb-5 rounded-lg">
                    <p>Please be patient while we are reviewing your product. Product ID: <span class="font-bold">#{{ product.id }}</span></p>
                </div>

                <!-- start of headline -->
                <Headline
                    title="Product Overview"
                    :h1="product.name"
                    class="within--paddingB"
                />
                <!-- end of headline -->

                <div class="xl:flex grid   items-center   mb-7 flex-wrap border-black border rounded-md overflow-hidden">
                    <p class="text-xl py-3 px-4  h-full flex items-center bg-yellow-100 border-b xl:border-b-0 xl:border-r border-black"><i class="fa-solid fa-dollar-sign mr-1" ></i> {{ product.price }}</p>
                    <p class="text-xl py-3 px-4 h-full flex items-center border-b xl:border-b-0 xl:border-r border-black">@{{ product.user.username }}</p>
                    
                    <!-- average rating -->
                    <div v-if="averageRating" class="flex py-3 px-4 gap-x-1 items-center  text-xl h-full border-b xl:border-b-0 xl:border-r border-black">
                        <p>{{ averageRating + ' / 5 Stars'}}</p>
                    </div>

                    <!-- total ratings -->
                    <div class="flex py-3 px-4 gap-x-1 items-center  text-xl h-full border-b xl:border-b-0 xl:border-r border-black">
                        <p>{{ reviews.total > 0 ? reviews.total + ' Reviews' : 'No Reviews'}}</p>
                    </div>
                    
                    <!-- total purchases -->
                    <p class="text-xl py-3 px-4  h-full  flex items-center gap-x-2 ">
                        <!-- Displays total ratings and correct use of plural -->
                        <i class="fa-solid fa-cart-shopping"></i> {{orderCount > 1 ? orderCount + ' Purchases' : (orderCount === 0 ? 'No Purchases' : orderCount + ' Purchase')  }} 
                    </p>

                </div>

                <!-- short description of the product -->
                <p class="pb-7">{{product.short_description}}</p>

                <!-- short snippet of the product -->
                <div class="pattern-2 border-[1px] border-black py-10 px-2 md:px-10  relative rounded-md">
                    <svg class="absolute  -bottom-6 right-1 lg:right-4 h-[4.5rem]" viewBox="0.5 1 323.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>
                    <p class="text-xl md:text-3xl ">“{{product.snippet}}“</p>
                </div>

                <!-- description of the product -->
                <div class="unreset">
                    
                    <!-- pulls html code from rich text editor -->
                    <p  v-html="product.description"></p>
                </div>

            </div>
        </div>

        <!-- start review list -->
        <div class="component--paddingT component--paddingX within-paddingB" v-if="productHasReviews">
            <h3 class="font-bold text-3xl md:text-4xl ">Heres what buyers have to say.</h3>

            <Pagination class="mt-10 " :links="reviews.links" />

            <ul id="reviews" class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1  py-7">

                <!-- start of review loop -->
                <li v-for="review in reviews.data" :key="review.id"  class="bg-white rounded-lg overflow-hidden" >
                    <div class="bg-yellow-100 border-b-[1px] border-black  text-center flex items-center gap-x-2 px-2">
                        <svg class="w-10" viewBox="0 0 36 36" fill="none" role="img" width="80" height="80"><title>@{{ review.user.username }}</title><mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#mask__beam)"><rect width="36" height="36" fill="#ffad08"></rect><rect x="0" y="0" width="36" height="36" transform="translate(7 7) rotate(297 18 18) scale(1)" fill="#73b06f" rx="6"></rect><g transform="translate(3.5 3.5) rotate(7 18 18)"><path d="M13,19 a1,0.75 0 0,0 10,0" fill="#000000"></path><rect x="12" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="22" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                        
                        <!-- reviewer and link to their profile -->
                        <Link :href="'/u/' + review.user.username">@{{ review.user.username }}</Link>

                        <p> | </p>

                        <!-- the rating they left -->
                        <div class="flex">
                            <div v-for="review in review.rating">
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">

                        <!-- review title -->
                        <p class="text-xl font-bold mb-2">{{ review.title }}</p>

                        <!-- review description -->
                        <p class="text-lg">{{ review.review }}</p>
                    </div>
                </li>
                <!-- end of review loop -->

            </ul>

        </div>
        <!-- end of review list -->

        <!-- start of review form -->
        <div v-if="!userHasReviewed && userHasPurchased && !userIsAuthor" class="component--padding">
            <h3 class="font-bold text-3xl md:text-4xl  component--paddingB">You have purchased this ebook. Share your experience.</h3>

            <form @submit.prevent="submit" novalidate>
                <div class="mb-4">
                    <Label for="title" value="Title"></Label>
                    <Input id="title" type="text" class="mt-1 block w-full  " v-model="form.title" required />
                    <p v-if="errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.title }}</p>
                </div>

                <div class="mb-4">
                    <Label for="review" value="Review"></Label>
                    <textarea id="review" v-model="form.review" rows="4" class=" bg-white border border-gray-300 text-gray-900 text-sm  focus:ring-indigo-200 focus:ring-opacity-50 focus:ring block w-full p-2.5" placeholder="Review this ebook"></textarea>
                    <p v-if="errors.review" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.review }}</p>
                </div>


                <div class="mb-4">
                    <Label for="rating" value="Rating"></Label>
                    <Input id="rating" type="text" class="mt-1 block w-full  " v-model="form.rating" required />
                    <p v-if="errors.rating" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ errors.rating }}</p>
                </div>

                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="bg-yellow-200 hover:bg-yellow-100">
                    Submit Review
                </Button>
            </form>
        </div>
        <!-- end of review form -->
        
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
import {Link} from "@inertiajs/inertia-vue3";

const props = defineProps({
    product: Object,
    allReviews: Object,
    orderCount: Number,
    reviews: Object,
    userHasPurchased: Boolean,
    userHasReviewed: Boolean,
    productHasReviews: Boolean,
    userIsAuthor: Boolean,
    errors: Object
});

/* get the total amount of rating stars */
let totalRatings = 0;
for(let i = 0; i < props.allReviews.length; i++) {
    totalRatings += props.allReviews[i].rating;
}

/* get the exact average rating */
let averageRating = (props.allReviews.length * 5) / totalRatings;

/* round the number */
averageRating = Math.round(averageRating*2)/2;
console.log(averageRating)

const form = useForm({
    title: '',
    review: '',
    rating: '',
});
const submit = () => {
    form.post('/reviews');
};
</script>
