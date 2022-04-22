<template>
    <!--Steps-->
        <div class="text-center  flex flex-col items-center justify-center ">

            <Headline firstHeadline="It's really easy!" secondHeadline="Sell your eBooks"/>

            <div class="text-left grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-3 max-w-8xl mx-auto  px-2 xl:px-0">


                <div class="flex relative w-full">
                    <svg class="h-12 md:h-16  md:-top-7 right-2 md:right-5 absolute" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 1 246.15 115">
                        <text data-name="Step 1" transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91"
                              font-family="Outfit" font-weight="700">
                            <tspan x="0" y="0">Step 1</tspan>
                        </text>
                    </svg>

                    <div class="">
                        <h3 class="px-2 lg:px-4 py-5 text-2xl font-bold ">Create account</h3>
                        <p class="bg-beige-5 px-4 py-6 border-t-2 border-black rounded-b-lg">Lorem ipsum dolor sit amet, consectetuer
                            adipiscing
                            elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </div>


                <div class="flex relative  relative w-full">

                    <svg class="h-12 md:h-16  md:-top-7 right-2 md:right-5 absolute" viewBox="0 1 263.07 115"><text data-name="Step 2" transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91" font-family="Outfit" font-weight="700"> <tspan x="0" y="0">Step 2</tspan></text></svg>


                    <div class="">
                        <h3 class="px-2 lg:px-4 py-5 text-2xl font-bold ">Upload eBook</h3>
                        <p class="bg-beige-5 px-4 py-6 border-t-2 border-black rounded-b-lg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </div>

                <div class="flex relative  relative w-full">

                    <svg class="h-12 md:h-16  md:-top-7 right-2 md:right-5 absolute" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 1 262.62 115">
                        <text data-name="Step 3" transform="translate(1 92)" fill="#fff" stroke="#000" font-size="91"
                              font-family="Outfit" font-weight="700">
                            <tspan x="0" y="0">Step 3</tspan>
                        </text>
                    </svg>

                    <div class="">
                        <h3 class="px-2 lg:px-4 py-5 text-2xl font-bold">Wait for approval</h3>
                        <p class="bg-beige-5 px-4 py-6 border-t-2 border-black rounded-b-lg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </div>
            </div>
        </div>

</template>


<script>
import Headline from "@/Partials/Headline";

export default {
    name: 'App',
    components: {
        Headline
    }
}
</script>
