<template>
    <div>
        <div v-if="$page.props.flash.success" class="mb-5 text-black">
            <Notification>{{ $page.props.flash.success }}</Notification>
        </div>


        <div class="layout">
            <!-- Sticky Sidenav // Desktop -->
            <nav class="layout__desktopNav">
                <ul class="layout__desktopNav__ul">
                    <li class="layout__desktopNav__ul__li layout__desktopNav__ul__li--mb">
                        <Link href="/" class="layout__desktopNav__ul__li__a">
                            <svg class="layout__desktopNav__ul__li__a__svg" viewBox="0.25 0.25 138.02 28.95"><path data-name="Pfad 1237" d="M.25 28.754V9.689H6.3v19.066ZM6.3 18.317l-2.516-1.891a10.573 10.573 0 0 1 2.535-5.22 6.469 6.469 0 0 1 4.88-1.891 6.374 6.374 0 0 1 2.421.416 4.974 4.974 0 0 1 1.892 1.229l-3.575 4.558a2.44 2.44 0 0 0-.946-.624 3.329 3.329 0 0 0-1.343-.246 3.121 3.121 0 0 0-2.4.927 3.783 3.783 0 0 0-.948 2.742Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><path data-name="Pfad 1238" d="M23.969 29.192a11.575 11.575 0 0 1-5.5-1.267 9.722 9.722 0 0 1-3.783-3.556 10.365 10.365 0 0 1 0-10.271 9.684 9.684 0 0 1 3.65-3.556 10.667 10.667 0 0 1 5.22-1.286 10.062 10.062 0 0 1 5.031 1.211 9.193 9.193 0 0 1 3.423 3.386 9.666 9.666 0 0 1 1.248 4.937 11 11 0 0 1 0 1.116 7.791 7.791 0 0 1-.265 1.286h-16.4v-4.161H30.4l-2.591 1.759a6.867 6.867 0 0 0-.511-2.686 3.537 3.537 0 0 0-1.381-1.664 4.048 4.048 0 0 0-2.232-.586 4.331 4.331 0 0 0-2.44.662 4.388 4.388 0 0 0-1.627 1.891 6.545 6.545 0 0 0-.567 2.837 6.11 6.11 0 0 0 .624 2.856 4.237 4.237 0 0 0 1.721 1.892 5.144 5.144 0 0 0 2.648.643 6.09 6.09 0 0 0 2.516-.492 5.675 5.675 0 0 0 2-1.456l3.329 3.291a8.852 8.852 0 0 1-3.4 2.5 11.99 11.99 0 0 1-4.521.719Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><path data-name="Pfad 1239" d="M43.64 29.193a8.606 8.606 0 0 1-4.672-1.305 9.457 9.457 0 0 1-3.272-3.537 10.384 10.384 0 0 1-1.211-5.088 10.63 10.63 0 0 1 1.229-5.2 9.041 9.041 0 0 1 3.253-3.537 8.719 8.719 0 0 1 4.691-1.267 8.019 8.019 0 0 1 3.48.738 7.131 7.131 0 0 1 2.535 2.062 5.675 5.675 0 0 1 1.1 3.007v8.247a5.674 5.674 0 0 1-1.078 3.007 6.9 6.9 0 0 1-2.516 2.062 8.133 8.133 0 0 1-3.537.813Zm1.248-5.447a3.934 3.934 0 0 0 3.083-1.267 4.577 4.577 0 0 0 1.173-3.253 5.05 5.05 0 0 0-.511-2.308 3.972 3.972 0 0 0-1.494-1.57 4.426 4.426 0 0 0-2.251-.567 4.237 4.237 0 0 0-2.175.567 4.407 4.407 0 0 0-1.532 1.589 4.767 4.767 0 0 0-.567 2.327 4.578 4.578 0 0 0 .567 2.308 4.181 4.181 0 0 0 1.532 1.608 4.237 4.237 0 0 0 2.175.53Zm4.01 5.05V23.67l.908-4.691-.908-4.577V9.73h5.936v19.063Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><path data-name="Pfad 1240" d="M65.789 29.189a9.192 9.192 0 0 1-4.861-1.286 9.079 9.079 0 0 1-3.272-3.537 11.708 11.708 0 0 1 0-10.214 9.116 9.116 0 0 1 3.291-3.537 9.212 9.212 0 0 1 4.842-1.286 8.7 8.7 0 0 1 3.537.719 7.055 7.055 0 0 1 2.629 2.043 5.807 5.807 0 0 1 1.173 3.045v8.058a5.863 5.863 0 0 1-1.173 3.026 7.566 7.566 0 0 1-2.629 2.175 7.887 7.887 0 0 1-3.537.794Zm1.059-5.447a4.218 4.218 0 0 0 2.232-.567 4.048 4.048 0 0 0 1.475-1.608 4.88 4.88 0 0 0 .53-2.345 4.824 4.824 0 0 0-.53-2.308 4.275 4.275 0 0 0-5.863-1.551 4.425 4.425 0 0 0-1.513 1.608 4.521 4.521 0 0 0-.567 2.289 4.785 4.785 0 0 0 .53 2.308 3.783 3.783 0 0 0 1.513 1.608 4.256 4.256 0 0 0 2.194.53Zm9.93 5.05h-5.92v-5.126l.889-4.691-1.021-4.577V.25h6.053Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><path data-name="Pfad 1241" d="M78.708 28.754V9.688h6.034v19.066Zm12.238 0V17.61a2.819 2.819 0 0 0-.87-2.213 3.083 3.083 0 0 0-2.175-.813 3.5 3.5 0 0 0-1.627.378 2.951 2.951 0 0 0-1.116 1.04 3.084 3.084 0 0 0-.416 1.608l-2.308-1.059a7.358 7.358 0 0 1 1-3.783 6.96 6.96 0 0 1 2.667-2.516 8.1 8.1 0 0 1 3.783-.87 6.98 6.98 0 0 1 3.537.908 6.885 6.885 0 0 1 2.553 2.5 7.4 7.4 0 0 1 .965 3.783v12.2Zm12.181 0V17.61a2.837 2.837 0 0 0-.889-2.213 3.026 3.026 0 0 0-2.137-.813 3.518 3.518 0 0 0-1.589.378 2.592 2.592 0 0 0-1.116 1.04 3.064 3.064 0 0 0-.4 1.608l-3.5-.473a8.89 8.89 0 0 1 1.192-4.2 7.15 7.15 0 0 1 2.856-2.7 8.454 8.454 0 0 1 4.048-.946 8.077 8.077 0 0 1 3.9.927 6.772 6.772 0 0 1 2.7 2.61 8.039 8.039 0 0 1 .984 4.067v11.859Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><path data-name="Pfad 1242" d="M121.378 28.754a11.67 11.67 0 0 1-5.485-1.248 9.268 9.268 0 0 1-5.145-8.53 9.4 9.4 0 0 1 4.974-8.455 10.667 10.667 0 0 1 5.22-1.267 10.251 10.251 0 0 1 5.031 1.192 9.079 9.079 0 0 1 3.424 3.291 9.458 9.458 0 0 1 1.248 4.842 10.934 10.934 0 0 1 0 1.1 9.042 9.042 0 0 1-.246 1.248h-16.415V16.86h13.827l-2.591 1.721a7.377 7.377 0 0 0-.605-2.629 3.783 3.783 0 0 0-1.4-1.627 4.029 4.029 0 0 0-2.213-.586 4.5 4.5 0 0 0-2.459.662 4.351 4.351 0 0 0-1.608 1.8 6.28 6.28 0 0 0-.567 2.78 5.978 5.978 0 0 0 .605 2.8 4.2 4.2 0 0 0 1.721 1.891 5.183 5.183 0 0 0 2.648.643 6.356 6.356 0 0 0 2.516-.492 5.524 5.524 0 0 0 2-1.437l3.329 3.234a8.568 8.568 0 0 1-3.4 2.44 11.991 11.991 0 0 1-4.407.7Z" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width=".5"></path><rect data-name="Rechteck 456" width="5.239" height="5.239" rx="2" transform="translate(133.03 23.515)"></rect></svg>
                            <span class="sr-only">go to home</span>
                        </Link>
                    </li>

                    <li class="layout__desktopNav__ul__li">
                        <Link href="/" class="layout__desktopNav__ul__li__a layout__desktopNav__ul__li__a--flex">
                            <i class="fa-solid fa-house"></i> Home
                        </Link>
                    </li>



                    <li v-if="$page.props.auth.user" class="layout__desktopNav__ul__li">
                        <Link href="/create" class="layout__desktopNav__ul__li__a layout__desktopNav__ul__li__a--flex">
                            <i class="fa-solid fa-circle-plus"></i> Sell
                        </Link>
                    </li>

                    <li v-if="$page.props.auth.user" class="layout__desktopNav__ul__li">
                        <Link href="/library" class="layout__desktopNav__ul__li__a layout__desktopNav__ul__li__a--flex">
                            <i class="fa-solid fa-book-open"></i> Library
                        </Link>
                    </li>

                    <li v-if="$page.props.auth.user && $page.props.auth.user.is_admin" class="layout__desktopNav__ul__li">
                        <Link href="/admin" class="layout__desktopNav__ul__li__a layout__desktopNav__ul__li__a--flex">
                            <i class="fa-solid fa-screwdriver-wrench"></i> Admin
                        </Link>
                    </li>

                    <Dropdown v-if="$page.props.auth.user" align="left" width="48">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="text-xl inline-flex items-center  text-sm leading-4  focus:outline-none transition ease-in-out duration-150 gap-x-3">
                                    <i class="fa-solid fa-user"></i>

                                    Account
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('logout')" method="post" as="button">
                                Profile
                            </DropdownLink>
                            <DropdownLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </DropdownLink>

                        </template>
                    </Dropdown>



                    <li v-if="!$page.props.auth.user" class="layout__desktopNav__ul__li">
                        <Link href="/login" class="layout__desktopNav__ul__li__a layout__desktopNav__ul__li__a--flex">
                            <i class="fa-solid fa-arrow-right-to-bracket w-6"></i> Login
                        </Link>
                    </li>

                    <li v-if="!$page.props.auth.user" class="layout__desktopNav__ul__li">
                        <CustomLink :href="route('register')" text="Register"/>
                    </li>

                </ul>
            </nav>

            <!-- Bottom Nav // Mobile -->
            <nav class="layout__mobileNav">
                <Link href="/"><i class="fa-solid fa-house"></i> <span class="sr-only">Home</span></Link>
                <Link href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> <span class="sr-only">Login</span></Link>
            </nav>


            <!-- Content -->
            <div class="w-full h-full">
                <!-- Page Heading -->
                <header class="bg-white shadow" v-if="$slots.header">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main class="mt-3">

                    <slot />
                </main>

                <!-- this div is to make up for the space, which the mobile nav is covering -->
                <div class="w-full h-14 md:hidden"></div>
            </div>
        </div>
    </div>

</template>






<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import CustomLink from "@/Shared/CustomLink";
import Dropdown from "@/Shared/Dropdown";
import DropdownLink from "@/Shared/DropdownLink";
import Notification from "@/Shared/Notification";


</script>

<style lang="scss" scoped>
.layout {
    @apply container;
    @apply mx-auto;
    @apply relative;
    @apply flex;
    @apply gap-x-5;

    /* Start of desktop navigation*/
    &__desktopNav {
        @apply sticky;
        @apply top-10;
        @apply h-full;
        @apply hidden;
        @apply md:block;

        &__ul {
            @apply flex;
            @apply flex-col;
            @apply text-xl;
            @apply gap-y-5;

            &__li {
                &__a {
                    &__svg {
                        @apply w-36;
                        @apply fill-current;
                    }

                    &--flex {
                        @apply flex;
                        @apply gap-x-3;
                        @apply items-center;
                        @apply w-6;
                    }
                }
                &--mb {
                    @apply mb-1;
                }
            }

        }
    }
    /* End of desktop navigation*/

    /* Start of mobile navigation*/
    &__mobileNav {
        @apply fixed;
        @apply bottom-0;
        @apply left-0;
        @apply w-full;
        @apply bg-white;
        @apply text-2xl;
        @apply flex;
        @apply justify-center;
        @apply items-center;
        @apply h-14;
        @apply md:hidden;
        @apply gap-x-5;
        @apply z-50;
    }
    /* End of mobile navigation */
}
</style>


