<template>
    <!-- Daily snippet -->
    <div class="relative flex flex-col items-center justify-center  pt-[3rem] pb-[4rem] lg:pb-[5rem] lg:pt-[6rem] lg:pb-[6.5rem] overflow-hidden  border-b-2 border-black">

        <Headline first-headline="The daily Feature" second-headline="Daily Snippets"></Headline>




        <!-- Start of container -->
        <div class="max-w-8xl grid  md:grid-rows-2 xl:grid-rows-1 md:grid-cols-2 xl:grid-cols-11 relative gap-2 mx-2 xl:mx-0">

            <!-- Start of snippet card -->
            <div class="flex flex-col justify-center px-2 lg:px-5 border-2 border-black  xl:col-span-4 relative">
                <svg class="absolute -bottom-6 left-1 lg:left-4 h-[4.5rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 324.42 115"><text transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"><tspan x="0" y="0">Snippet</tspan></text></svg>
                <p class="text-5xl font-bold pt-10 -mb-3 lg:mb-0 lg:pt-4">"</p>
                <p class="text-lg leading-[1.4rem]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, </p>
                <p class="text-5xl font-bold text-right pt-3 lg:pt-4 pb-3 lg:pb-0">"</p>

            </div>
            <!-- End of snippet card -->


            <!-- Start of information card -->
            <MdProductCard class="xl:col-span-3" title="Lorem ipsum dolar set et consectetuer" authorName="John Carter"></MdProductCard>


            <!-- End of information card -->


            <!-- Start of description card -->
            <div class="flex  bg-building border-2 border-black md:col-span-2 xl:col-span-4 relative">
                <svg class="absolute h-[4.5rem] -bottom-6 xl:-top-8 left-1 lg:left-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 263.08 116"><text transform="translate(1 93)" fill="#fff" stroke="#000" font-size="92" font-family="Outfit" font-weight="700"><tspan x="0" y="0">About</tspan></text></svg>
                <div class="flex flex-col justify-center px-2 lg:px-5 py-10 lg:py-0">
                    <h3 class="text-3xl font-bold pb-2">About this eBook</h3>
                    <div class="w-16 h-[0.25rem] bg-yellow-200 border-[0.1rem] border-black mb-2"></div>
                    <p class="max-w-xl text-lg leading-[1.4rem]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                </div>
            </div>
            <!-- End of description card -->


        </div>
        <!-- End of container -->
    </div>

</template>
<script>
import Headline from "@/Partials/Headline";
import MdProductCard from "@/Partials/Cards/MdProductCard";
export default {
    components: {MdProductCard, Headline}
}
</script>
