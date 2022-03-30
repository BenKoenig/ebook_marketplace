<template>
    <div className="text-center relative flex flex-col items-center justify-center ">
        <!--Blurred background (yellow/green)-->
        <div className="absolute blur-2xl left-2/4 -translate-x-2/4 top-2/4 -translate-y-2/4 w-full max-w-md  pointer-events-none ">
<!--            <img className="w-full" src="../../assets/blur-1.png">-->
            <svg  viewBox="0 0 800 800" opacity="1"><defs><filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feGaussianBlur stdDeviation="40" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g filter="url(#bbblurry-filter)"><ellipse rx="180.5" ry="180.5" cx="302.9654099211966" cy="351.3617858886719" fill="#fafa55ff"></ellipse><ellipse rx="180.5" ry="180.5" cx="481.4760196662055" cy="488.6412353515625" fill="#fabc73"></ellipse></g></svg>
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
