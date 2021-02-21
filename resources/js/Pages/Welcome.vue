<template>
    <app-layout>
        <!-- Hero section -->
        <div class="relative mt-10 space-y-5">
            <h1
                class="font-extrabold tracking-tight text-gray-900 dark:text-white text-7xl"
            >
                Fullstack
                <br />Developer
            </h1>
            <p
                class="text-base italic font-medium text-gray-800 dark:text-gray-300"
            >
                currently exploring new frontend frameworks like
                tailwindcss(this site was made using it)
            </p>
        </div>
        <!-- Card -->
        <div
            class="px-8 py-10 bg-gray-100 rounded-md shadow-md dark:bg-gray-700"
        >
            <!-- flex -->
            <div
                class="items-start space-y-4 text-center md:space-x-10 md:flex"
            >
                <!-- Picture -->

                <img
                    class="mx-auto border-4 border-gray-400 rounded-full dark:border-gray-800 justify-self-center w-52 h-52"
                    :src="asset('images/me.jpeg')"
                />

                <!-- Bio -->
                <div class="space-y-4">
                    <h3 class="text-4xl italic font-bold opacity-70">
                        <span class="text-red-800 dark:text-red-500">
                            <span class="text-blue-500 dark:text-blue-300"
                                >echo</span
                            >
                            <span class="text-green-700 dark:text-green-300"
                                >'welcome'</span
                            >
                            ;
                        </span>
                    </h3>
                    <p
                        class="font-semibold leading-relaxed text-gray-900 dark:text-white"
                    >
                        I'm
                        <span
                            class="font-bold text-green-700 dark:text-green-300"
                            >Mackensie Alvarez</span
                        >! Experienced Mobile and Web Developer that is
                        extremely passionate about his work. Strong engineering
                        professional with a Bachelor’s Degree focused in
                        Computer Science from New Jersey City University. Coding
                        started as a hobby at a very early age. I realized very
                        early on that I wanted to be a programmer because of the
                        art of coding. The ability to think of an idea and make
                        it exactly how you imagine.
                    </p>
                </div>
            </div>
        </div>
        <!-- End of card -->
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { asset } from "@/asset.js";
export default {
    components: {
        AppLayout
    },
    methods: {
        asset: asset
    }
};
</script>
