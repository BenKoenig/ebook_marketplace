<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="max-w-8xl h-[20rem] md:h-[32rem] mx-auto relative ">
        <div class="absolute h-full w-fit">
            <img class="h-full w-fit " src="../../assets/tablet.jpg" alt="tablet">
        </div>
    </div>

    
    <div class="max-w-8xl mx-auto sm:grid sm:grid-cols-12 gap-x-14 px-2 lg:px-10  bg-[#F7F7F7] pt-8 sm:pt-16">
            <div class="sm:sticky sm:top-1 h-fit  w-full sm:col-span-4 md:col-span-3 sm:order-2  mx-auto relative">
                <!-- <img src="https://via.placeholder.com/150x300" class="border-2 border-black w-full mb-1" alt="img"> -->
                <!-- <div class="border-2 border-black py-3 px-4 mb-1">
                    <p>4.6 / 5</p>
                    <a href="#" class="bg-white border-2 border-black text-lg flex w-full   h-10 justify-center items-center">View Ratings</a>
                </div> -->

                <div class="bg-white border-2 border-black mb-1 flex flex-col items-center  py-6 ">
                    <p class="text-xl">Rating</p>
                    <div class="flex -mt-1">
                        <p class="font-bold text-7xl">4.6</p><p class="text-3xl">/5</p>
                    </div>
                </div>
                <div class="flex gap-1">
                    <Link :href="route('dashboard')" class="bg-white border-2 border-black text-lg flex w-full h-10 justify-center items-center">
                        Reviews
                    </Link>
                    <Link :href="route('dashboard')" class="bg-yellow-200 border-2 border-black text-lg flex w-full h-10 justify-center items-center">
                        Buy
                    </Link>
                    
                </div>


            </div>

            <div class="w-full sm:col-span-8 md:col-span-9  sm:order-1 ">
                <h1 class="text-2xl md:text-5xl font-bold pb-5 pt-8 sm:pt-0">{{ product.name }}</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
                <div class="bg-beige-5 py-10 px-2 md:px-10  relative my-8 sm:my-16">
                        <svg class="absolute  -bottom-6 right-1 lg:right-4 h-[4.5rem]" viewBox="0.5 1 323.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>
                <p class="text-xl md:text-3xl ">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cm sociis natoque penatibus et“</p>

                </div>
                <p class="mb-4 text-lg">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.

                    Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                    <br />
                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. 
                    
                    <br />
                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla mauris sit amet nibh.
                    Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc,
                </p>

                <!-- <div class="grid grid-cols-2 gap-2">

                    <img class="max-w-7xl w -full mx-auto" src="https://via.placeholder.com/150x150"/>
                    <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>
                    <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>
                    <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>

                </div> -->


            </div>
    </div>


</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';



export default {

    props: ['product'],
}
</script>
