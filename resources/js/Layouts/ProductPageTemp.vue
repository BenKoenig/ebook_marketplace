<template>
    <div class=" flex flex-col items-center justify-center  overflow-hidden ">


        <Headline first-headline="Lorem ipsum dolar" second-headline="Lorem ipsum dolar"></Headline>



        <div class="relative w-full">
            <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/350x65"/>
        </div>

    </div>


    <div class="max-w-5xl mx-auto sm:grid sm:grid-cols-12 gap-x-14 -mt-[2.8rem] sm:-mt-[5rem] px-2 lg:px-0">
        <div class="sm:sticky sm:top-1 w-full h-fit  w-full  sm:col-span-4 md:col-span-3 sm:order-2 max-w-[13rem] mx-auto relative">
            <img src="https://via.placeholder.com/150x300" class="border-2 border-black w-full mb-1" alt="img">
            <div class="border-2 border-black py-3 px-4 mb-1">
                <p>4.6 / 5</p>
                <a href="#" class="bg-white border-2 border-black text-lg flex w-full   h-10 justify-center items-center">View Ratings</a>
            </div>
            <a href="#" class="bg-yellow-200 border-2 border-black text-lg flex w-full   h-10 justify-center items-center">Buy eBook</a>

        </div>

        <div class="w-full sm:col-span-8 md:col-span-9 sm:mt-[5rem] sm:order-1">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
            <p class="text-xl font-bold bg-gray-100 p-10">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cm sociis natoque penatibus et“</p>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.

                Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.

                Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla mauris sit amet nibh.
                Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc,
            </p>

            <div class="grid grid-cols-2 gap-2">

                <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>
                <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>
                <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>
                <img class="max-w-7xl w-full mx-auto" src="https://via.placeholder.com/150x150"/>

            </div>
        </div>




    </div>
</template>
<script>
import Headline from "@/Partials/Headline";
export default {
    components: {Headline}
}
</script>
