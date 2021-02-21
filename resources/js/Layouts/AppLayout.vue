<template>
    <div class="min-h-screen antialiased bg-white dark:bg-gray-900">
        <!-- container -->
        <div class="container px-8 py-10 mx-auto space-y-10">
            <!-- Header -->
            <div class="relative header-section">
                <!-- Navbar -->
                <div
                    class="flex items-center justify-end space-x-5 font-medium dark:text-gray-100"
                >
                    <SwitchField
                        :toggleActive="darkMode"
                        @onChange="darkMode = !darkMode"
                    ></SwitchField>

                    <inertia-link
                        href="/projects"
                        class="cursor-pointer hover:underline"
                        v-if="currentPage == 'welcome'"
                        >Projects</inertia-link
                    >
                    <inertia-link
                        href="/"
                        class="cursor-pointer hover:underline"
                        v-if="currentPage == 'projects'"
                        >Home</inertia-link
                    >
                </div>
            </div>

            <!-- Hero section -->
            <main class="space-y-10">
                <slot></slot>
            </main>

            <!-- Social footer -->
            <div
                class="flex items-center justify-center space-x-5 social dark:text-white"
            >
                <a href="https://github.com/mackensiealvarezz">
                    <svg
                        class="w-10 h-10 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <defs />
                        <path
                            d="M256 0A257 257 0 000 256c0 120 84 229 196 256v-85a63 63 0 01-69-31c-6-9-16-20-27-19l-3-30c24-2 44 14 56 34 5 9 11 14 19 17 8 2 16 1 25-2 3-19 11-27 18-37-67-10-93-45-104-73-14-37-7-83 18-112 1-1 2-3 1-4-11-34 3-62 3-65 13 4 15-4 57 21l7 5h5a218 218 0 01108 0l3 1 2-1c52-32 50-22 64-26 0 3 14 32 3 65-2 5 45 48 19 116-11 28-37 63-104 73 9 13 19 20 19 47v106a266 266 0 00196-256C512 115 397 0 256 0zm0 0"
                        />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/mackensiea/">
                    <svg
                        class="w-10 h-10 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <defs />
                        <path
                            d="M437 0H75C34 0 0 34 0 75v362c0 41 34 75 75 75h362c41 0 75-34 75-75V75c0-41-34-75-75-75zM181 406h-60V196h60zm0-240h-60v-60h60zm210 240h-60V286a30 30 0 00-60 0v120h-60V196h60v11c16-5 26-11 45-11 41 0 75 37 75 80zm0 0"
                        />
                    </svg>
                </a>
                <a href="https://www.instagram.com/mackensiealvarezz/">
                    <svg
                        class="w-10 h-10 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2500 2500"
                    >
                        <defs />

                        <path
                            d="M833 1250a417 417 0 11834 0 417 417 0 01-834 0m-225 0a642 642 0 101284 0 642 642 0 00-1284 0m1159-667a150 150 0 10150-150 150 150 0 00-150 150M745 2267c-122-5-188-25-232-43-58-22-100-49-144-93s-71-85-93-144c-18-44-38-110-43-232-6-132-8-171-8-505s2-373 8-505c5-122 26-188 43-232 22-59 49-100 93-144s85-71 144-94c44-17 110-37 232-43 132-6 171-7 505-7s373 1 505 7c122 6 188 26 232 43 59 23 100 50 144 94s71 85 94 144c17 44 37 110 43 232 6 132 7 171 7 505s-1 373-7 505c-6 122-26 188-43 232-23 59-50 100-94 144s-85 71-144 93c-44 18-110 38-232 43-132 7-171 8-505 8s-373-1-505-8M735 8c-133 6-224 27-304 58-82 32-152 74-221 144S98 349 66 431C35 511 14 602 8 735c-7 133-8 176-8 515s1 382 8 515c6 133 27 224 58 304 32 82 74 152 144 221s139 112 221 144c80 31 171 52 304 58s176 8 515 8 382-1 515-8c133-6 224-27 304-58 82-32 152-74 221-144s112-139 144-221c31-80 52-171 58-304s8-176 8-515-2-382-8-515-27-224-58-304c-32-82-74-152-144-221S2151 98 2069 66c-80-31-171-52-304-58s-175-8-515-8-382 1-515 8"
                        />
                        <path
                            d="M833 1250a417 417 0 11834 0 417 417 0 01-834 0m-225 0a642 642 0 101284 0 642 642 0 00-1284 0m1159-667a150 150 0 10150-150 150 150 0 00-150 150M745 2267c-122-5-188-25-232-43-58-22-100-49-144-93s-71-85-93-144c-18-44-38-110-43-232-6-132-8-171-8-505s2-373 8-505c5-122 26-188 43-232 22-59 49-100 93-144s85-71 144-94c44-17 110-37 232-43 132-6 171-7 505-7s373 1 505 7c122 6 188 26 232 43 59 23 100 50 144 94s71 85 94 144c17 44 37 110 43 232 6 132 7 171 7 505s-1 373-7 505c-6 122-26 188-43 232-23 59-50 100-94 144s-85 71-144 93c-44 18-110 38-232 43-132 7-171 8-505 8s-373-1-505-8M735 8c-133 6-224 27-304 58-82 32-152 74-221 144S98 349 66 431C35 511 14 602 8 735c-7 133-8 176-8 515s1 382 8 515c6 133 27 224 58 304 32 82 74 152 144 221s139 112 221 144c80 31 171 52 304 58s176 8 515 8 382-1 515-8c133-6 224-27 304-58 82-32 152-74 221-144s112-139 144-221c31-80 52-171 58-304s8-176 8-515-2-382-8-515-27-224-58-304c-32-82-74-152-144-221S2151 98 2069 66c-80-31-171-52-304-58s-175-8-515-8-382 1-515 8"
                        />
                    </svg>
                </a>
            </div>
            <!-- End of social footer -->
        </div>
    </div>
</template>

<script>
import SwitchField from "@/Components/SwitchField";
import { asset } from "@/asset.js";
export default {
    components: {
        SwitchField
    },
    data() {
        return {
            darkMode: false,
            currentPage: "welcome"
        };
    },
    watch: {
        darkMode: function(val) {
            console.log(val);
            if (this.darkMode) {
                localStorage.theme = "dark";
                document.documentElement.classList.add("dark");
            } else {
                localStorage.theme = "light";
                document.documentElement.classList.remove("dark");
            }
        }
    },
    created() {
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            this.darkMode = true;
        } else {
            this.darkMode = false;
        }

        this.currentPage = route().current();
    },
    methods: {
        asset: asset
    }
};
</script>

<style>
.toggle-checkbox:checked {
    @apply: right-0 border-green-400;
    right: 0;
    border-color: #68d391;
}
.toggle-checkbox:checked + .toggle-label {
    @apply: bg-green-400;
    background-color: #68d391;
}
</style>
