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
        <Spinner />
    </div>
</template>
<script>
import Sidebar from './Sidebar.vue';
import TopHeader from './TopHeader.vue';
import Navbar from './Navbar.vue';
import state from '../../store/index.js';
import { computed } from 'vue';
import Spinner from '../core/Spinner.vue';
export default {
    name: 'AppLayout',
    components: { Spinner, TopHeader, Sidebar, Navbar },

    data() {
        return {
            sideBarOpened: true
        };
    },

    setup() {
        const currentUser = computed(() => state.state.user.data);
        return { currentUser };
    },

    methods: {
        toggleSidebar() {
            this.sideBarOpened = !this.sideBarOpened;
        },

        handleSideBarOpened() {
            this.sideBarOpened = window.outerWidth > 768;
        }
    },

    mounted() {
        state.dispatch('getUser');
        this.handleSideBarOpened();
        window.addEventListener('resize', this.handleSideBarOpened);
    },

    unmounted() {
        window.removeEventListener('resize', this.handleSideBarOpened);
    }
};
</script>

<style scoped></style>
