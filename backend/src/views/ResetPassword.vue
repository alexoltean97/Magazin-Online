<template>
    <guest-layout title="Reseteaza parola">
        <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true" />
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="password" class="sr-only">Parolă</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        autocomplete="current-password"
                        required=""
                        class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Password"
                    />
                </div>

                <div>
                    <label for="password_repeat" class="sr-only"
                        >Repeta Parolă</label
                    >
                    <input
                        id="password_repeat"
                        name="password_repeat"
                        type="password"
                        autocomplete="current-password"
                        required=""
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
                        type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                    />
                    <label
                        for="remember-me"
                        class="ml-2 block text-sm text-gray-900"
                        >Remember me</label
                    >
                </div>

                <div class="text-sm">
                    <router-link
                        to="/request-password"
                        href="#"
                        class="font-medium text-indigo-600 hover:text-indigo-500"
                        >Ti-ai uitat parola?</router-link
                    >
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    <span
                        class="absolute inset-y-0 left-0 flex items-center pl-3"
                    >
                    </span>
                    Logare
                </button>
            </div>
        </form>
    </guest-layout>
</template>
<script>
import GuestLayout from "../components/layouts/GuestLayout.vue";
export default {
    name: "ResetPassword",
    components: { GuestLayout },
};
</script>

<style scoped></style>
