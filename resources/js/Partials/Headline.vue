<template>
    <div className="text-center relative flex flex-col items-center justify-center ">
        <!--Blurred background (yellow/green)-->
        <div
            className="absolute blur-2xl left-2/4 -translate-x-2/4 w-full max-w-md mr-14 pointer-events-none mb-4 ">
            <img className="w-full" src="../../assets/blur-1.png">
        </div>
        <p className="text-2xl z-10  relative font_courier">{{ firstHeadline }}</p>
        <h2 className="text-4xl font-bold z-10 pb-[2rem] lg:pb-[3rem] relative">{{ secondHeadline }}</h2>
    </div>
</template>


<script>
export default {
    name: 'Headline',
    props: {
        firstHeadline: String,
        secondHeadline: String
    }
}
</script>
