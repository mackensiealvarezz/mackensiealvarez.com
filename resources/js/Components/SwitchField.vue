<template>
    <div class @click="switchValue = !switchValue">
        <div
            class="flex items-center h-8 p-1 duration-300 ease-in-out bg-gray-300 rounded-full w-14 md:w-16 md:h-10"
            :class="{ 'bg-green-400': switchValue }"
        >
            <div
                class="w-8 h-8 duration-300 ease-in-out transform bg-white rounded-full shadow-md md:w-8 md:h-8"
                :class="{ 'translate-x-6': switchValue }"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SwitchField",
    props: {
        toggleActive: {
            type: Boolean,
            required: true,
            default: false
        }
    },
    data() {
        return {
            switchValue: this.toggleActive
        };
    },
    watch: {
        switchValue: function(value) {
            this.$emit("onChange", value);
        }
    }
};
</script>
