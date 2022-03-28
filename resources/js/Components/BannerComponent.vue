<template>
    <div class="relative bg-bluu-3">



        <div class="flex gap-y-6 max-w-8xl mx-auto px-2 xl:px-0 lg:items-center gap-2 flex-col lg:flex-row lg:justify-between ">
            <div>
                <h3 class="text-4xl  mb- lg:mb-4 font-bold">Learn and discover new technologies</h3>

                <p class="text-lg max-w-2xl mb-3 lg:mb-4">
                    vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                    felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                    vulputate eleifend tellus.
                </p>
                <YellowBtn msg="Get started"/>
            </div>
        </div>
    </div>
</template>

<script>
import YellowBtn from "../Partials/YellowBtn";
export default {
    components: {YellowBtn}
}
</script>
