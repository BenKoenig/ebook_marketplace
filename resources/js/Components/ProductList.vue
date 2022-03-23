<template>
    <div class="relative flex flex-col items-center justify-center overflow-hidden">

        <Headline first-headline="Must-reads!" second-headline="Featured eBooks"/>

        <div class="relative grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 xl:mx-0  max-w-8xl mx-auto gap-2  w-full px-2 xl:px-0">

            <!--start of eBook card-->
            <MdProductCard title="How to Create and Sell HTML Templates" authorName="John Carter" />
            <!--end of eBook card-->

            <!--start of eBook card-->
            <MdProductCard title="How to Create and Sell HTML Templates" authorName="John Carter" />
            <!--end of eBook card-->

            <!--start of eBook card-->
            <MdProductCard title="How to Create and Sell HTML Templates" authorName="John Carter" />
            <!--end of eBook card-->

            <!--start of eBook card-->
            <MdProductCard title="How to Create and Sell HTML Templates" authorName="John Carter" />
            <!--end of eBook card-->

        </div>
    </div>
</template>




<script>
import MdProductCard from "../Partials/Cards/MdProductCard";
import Headline from "@/Partials/Headline";


export default {
    name: 'App',
    components: {
        Headline,
        MdProductCard,
    }
}
</script>
