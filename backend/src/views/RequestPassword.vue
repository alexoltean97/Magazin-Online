<template>
    <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Cere o parola noua</h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true" />
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Adresă Email</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required="" class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address" />
                    </div>
                </div>

                <div class="flex items-center justify-between">

                    <div class="text-sm">
                        <router-link to="/request-password" href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Ti-ai adus aminte?</router-link>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Depune cerere
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: "RequestPassword"
}
</script>

<style scoped>

</style>
