<template>
    <guest-layout title="Loghează-te">
        <form class="mt-8 space-y-6" method="POST" @submit.prevent="login">
            <input type="hidden" name="remember" value="true" />
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="email-address" class="sr-only">Adresă Email</label>
                    <input
                        id="email-address"
                        name="email"
                        type="email"
                        v-model="user.email"
                        autocomplete="email"
                        class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Email address"
                    />
                </div>
                <div>
                    <label for="password" class="sr-only">Parolă</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        v-model="user.password"
                        autocomplete="current-password"
                        class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Password"
                    />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input
                        id="remember-me"
                        name="remember-me"
                        v-model="user.remember"
                        type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                    />
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>

                <div class="text-sm">
                    <router-link
                        :to="{ name: 'request-password' }"
                        class="font-medium text-indigo-600 hover:text-indigo-500"
                        >Ti-ai uitat parola?</router-link
                    >
                </div>
            </div>

            <div>
                <button
                    class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <LockClosedIcon
                            class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                            aria-hidden="true"
                        />
                    </span>
                    Logare
                </button>
            </div>
        </form>
    </guest-layout>
</template>

<script>
import { LockClosedIcon } from '@heroicons/vue/20/solid';
import GuestLayout from '../components/layouts/GuestLayout.vue';
import { ref } from 'vue';
import store from "../store/index.js";
import router from "../router/index.js";

export default {
    name: 'Login',
    components: {
        LockClosedIcon,
        GuestLayout
    },

    setup() {
        let loading = ref(false);
        let errorMsg = ref('');

        const user = {
            email: '',
            password: '',
            remember: false
        };

        function login() {
            loading.value = true;
            store.dispatch('login', user)
                .then(() => {
                    loading.value = false
                    router.push({name: 'app.dashboard'})
                })
                .catch(({response}) =>{
                    loading.value = false
                    errorMsg.value = response.data.message
                })
        }

        return { user, loading, errorMsg, login };
    }
};
</script>
