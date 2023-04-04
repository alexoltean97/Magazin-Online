<template>

    <div class="min-h-full bg-gray-200 flex">
        <Sidebar :class="{'-ml-[200px]': !sideBarOpened}"></Sidebar>

        <div class="flex-1">
           <TopHeader @toggle-sidebar="toggleSidebar"></TopHeader>

            <main class="p-6">
                <div class="p-4 rounded bg-white">
                    <router-view></router-view>
                </div>

            </main>
        </div>
    </div>

</template>
<script>
import Sidebar from "./Sidebar.vue";
import TopHeader from "./TopHeader.vue";
export default {
    name: "AppLayout",
    components: {TopHeader, Sidebar},


    data(){
        return{
            sideBarOpened: true,
        }
    },

    methods:{
        toggleSidebar(){
            this.sideBarOpened = !this.sideBarOpened;
        }
    }


}
</script>

<style scoped>

</style>
