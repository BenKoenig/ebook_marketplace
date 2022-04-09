<template>
    <div className="text-center relative flex flex-col items-center justify-center ">
        <!--Blurred background (yellow/green)-->
        <div className="absolute  left-2/4 -translate-x-2/4 top-2/4 -translate-y-2/4 w-full max-w-xl  pointer-events-none ">
<!--            <img className="w-full" src="../../assets/blur-1.png">-->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800"><defs><filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feGaussianBlur stdDeviation="91" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g filter="url(#bbblurry-filter)"><ellipse rx="127" ry="127" cx="328.2246691136339" cy="290.99012078138594" fill="#fabc73"></ellipse><ellipse rx="127" ry="127" cx="465.8227233886719" cy="389.3457901892093" fill="#fafa55ff"></ellipse></g></svg>
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
