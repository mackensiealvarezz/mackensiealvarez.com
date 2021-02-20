<template>
    <div class="min-h-screen antialiased bg-gray-100 dark:bg-gray-900">
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
                    <label class="cursor-pointer hover:underline ">Projects</label>

                </div>
            </div>

            <!-- Hero section -->
            <div class="relative mt-10 space-y-5">
                <h1
                    class="font-extrabold tracking-tight text-gray-900 dark:text-white text-7xl"
                >
                    Fullstack <br />Developer
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
                class="px-8 py-10 bg-gray-300 rounded-md shadow-2xl dark:bg-gray-700"
            >
                <!-- flex -->
                <div class="items-start space-y-4 text-center md:space-x-10 md:flex">
                    <!-- Picture -->

                   <img
                            class="mx-auto border-4 border-gray-400 rounded-full dark:border-gray-800 justify-self-center w-52 h-52"
                            src="https://avatars1.githubusercontent.com/u/6855367?s=460&amp;u=17b4f1ebaf437e01697ad5e681fc136d9bfa8736&amp;v=4"
                        />

                    <!-- Bio -->
                    <div class="space-y-4">
                        <h3 class="text-4xl italic font-bold opacity-70">
                            <span class="text-red-800 dark:text-red-500">
                                <?php
                                <span class="text-blue-500 dark:text-blue-300">echo</span>
                               <span class="text-green-700 dark:text-green-300">'welcome'</span>
                                ; ?>
                            </span>
                        </h3>
                        <p class="font-semibold leading-relaxed text-gray-900 dark:text-white">
I'm Mackensie Alvarez! Experienced Mobile and Web Developer that is extremely passionate about his work.
 Strong engineering professional with a Bachelor’s Degree focused in Computer Science from New Jersey City University.
  Coding started as a hobby at a very early age.
   I realized very early on that I wanted to be a programmer because of the art of coding.
   The ability to think of an idea and make it exactly how you imagine.
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SwitchField from "@/Components/SwitchField";
export default {
    components: {
        SwitchField
    },
    data() {
        return {
            darkMode: true
        };
    },
    watch: {
        darkMode: function(val) {
            console.log(val);
            if (this.darkMode) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }
        }
    },
    mounted() {
        localStorage.theme = "dark";
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
        // Whenever the user explicitly chooses light mode
        // localStorage.theme = "light";
        // Whenever the user explicitly chooses dark mode
        //  localStorage.theme = "dark";
        // Whenever the user explicitly chooses to respect the OS preference
        // localStorage.removeItem("theme");
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
