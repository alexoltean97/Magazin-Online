<template>
    <div class="w-[200px] transition-all bg-indigo-700 text-gray-300 p-4">
        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center py-3 px-2 rounded transition-colors hover:bg-black/30"
        >
            <span class="mr-2 text-gray-300"><HomeIcon class="w-5" /></span>
            <span class="text-sm font-light">Bord</span>
        </router-link>

        <router-link
            :to="{ name: 'app.products' }"
            class="flex items-center py-3 px-2 rounded transition-colors hover:bg-black/30"
        >
            <span class="mr-2 text-gray-300"><Bars3Icon class="w-5" /></span>
            <span class="text-sm font-light">Produse</span>
        </router-link>

        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center py-3 px-2 rounded transition-colors hover:bg-black/30"
        >
            <span class="mr-2 text-gray-300"><UsersIcon class="w-5" /></span>
            <span class="text-sm font-light">Utilizatori</span>
        </router-link>

        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center py-3 px-2 rounded transition-colors hover:bg-black/30"
        >
            <span class="mr-2 text-gray-300"><ChartBarIcon class="w-5" /></span>
            <span class="text-sm font-light">Rapoarte</span>
        </router-link>
    </div>
</template>

<script>
import {
    HomeIcon,
    UsersIcon,
    Bars3Icon,
    ChartBarIcon,
} from "@heroicons/vue/20/solid";

export default {
    name: "Sidebar",
    components: {
        HomeIcon,
        UsersIcon,
        Bars3Icon,
        ChartBarIcon,
    },
};
</script>

<style scoped></style>
