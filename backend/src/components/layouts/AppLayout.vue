<template>
    <div v-if="currentUser.id" class="min-h-full bg-gray-200 flex">
        <Sidebar :class="{ '-ml-[200px]': !sideBarOpened }"></Sidebar>

        <div class="flex-1">
            <Navbar @toggle-sidebar="toggleSidebar"></Navbar>

            <main class="p-6">
                <div class="p-4 rounded bg-white">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>

    <div v-else class="flex items-center justify-center min-h-full bg-gray-200">
        <svg
            class="animate-spin -ml-1 mr-3 h-16 w-16 text-black"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
        >
            <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
            ></circle>
            <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
            ></path>
        </svg>
    </div>
</template>
<script>
import Sidebar from "./Sidebar.vue";
import TopHeader from "./TopHeader.vue";
import Navbar from "./Navbar.vue";
import store from "../../store/index.js";
import { computed } from "vue";
export default {
    name: "AppLayout",
    components: { TopHeader, Sidebar, Navbar },

    data() {
        return {
            sideBarOpened: true,

        };
    },

    setup(){
        const currentUser = computed(() => store.state.user.data)
        return {currentUser}
    },

    methods: {
        toggleSidebar() {
            this.sideBarOpened = !this.sideBarOpened;
        },

        handleSideBarOpened() {
            this.sideBarOpened = window.outerWidth > 768;
        },
    },

    mounted() {
        store.dispatch('getUser')
        this.handleSideBarOpened();
        window.addEventListener("resize", this.handleSideBarOpened);
    },

    unmounted() {
        window.removeEventListener("resize", this.handleSideBarOpened);
    },
};
</script>

<style scoped></style>
