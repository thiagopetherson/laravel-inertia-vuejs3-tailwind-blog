<template>
    <Head title="Register" />
    <AuthLayout>
        <form @submit.prevent="registerForm.post(route('register.post'))">
            <div>
                <!-- Name -->
                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">
                        Name
                    </label>
                    <input v-model="registerForm.name" id="name" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus autocomplete="username">
                    <div v-if="errors.name" class="text-red-600">
                        {{ errors.name }}
                    </div>
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block font-medium text-sm text-gray-700">
                        Email
                    </label>
                    <input v-model="registerForm.email" id="email" type="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus autocomplete="username">
                    <div v-if="errors.email" class="text-red-600">
                        {{ errors.email }}
                    </div>
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block font-medium text-sm text-gray-700">
                        Password
                    </label>
                    <input v-model="registerForm.password" id="password" type="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="current-password">
                    <div v-if="errors.password" class="text-red-600">
                        {{ errors.password }}
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block font-medium text-sm text-gray-700">
                        Password Confirmation
                    </label>
                    <input v-model="registerForm.password_confirmation" id="password_confirmation" type="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="current-password">
                    <div v-if="errors.password_confirmation" class="text-red-600">
                        {{ errors.password_confirmation }}
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end mt-4">
                    <Link :href="route('login.index')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Already registered ?
                    </Link>
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ml-4">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </AuthLayout>
</template>

<script>
import AuthLayout from "../../Layouts/Auth.vue"
import { Head, Link, useForm } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AuthLayout, Head, Link
    },
    props: {
        errors: Object
    },
    setup() {
        const registerForm = useForm({
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        })

        return { registerForm }
    }
}
</script>
