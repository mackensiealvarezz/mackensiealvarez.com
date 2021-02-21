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
        <div class="container relative space-y-10 md:mx-10">
            <!-- card -->
            <span class="dark:text-gray-100">coming soon</span>
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
