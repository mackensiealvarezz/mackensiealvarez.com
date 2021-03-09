<template>
    <app-layout>
        <!-- Hero section -->
        <div class="relative mt-10 space-y-5">
            <h1
                class="font-extrabold tracking-tight text-gray-900 dark:text-white text-7xl"
            >
                Projects
            </h1>
            <p
                class="text-base italic font-medium text-gray-800 dark:text-gray-300"
            >
                i create things
            </p>
        </div>

        <!-- List of projects -->
        <div class="container relative flex justify-center space-y-10 md:mx-10">
            <!-- card -->
           <div class="space-y-3 card">
               <h1 class="text-2xl font-bold dark:text-white">TailDual
                   <span class="text-sm font-semibold text-gray-500 dark:text-gray-300">Coming soon</span>
               </h1>
                <img :src="asset('images/taildual.jpg')" class="rounded-2xl">
                <p class="mt-2 dark:text-gray-100">
                     Complete challenges and different design task all while using tailwindcss
                </p>
           </div>
        </div>
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
