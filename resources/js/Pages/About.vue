<template>
    <Head title="About us" />
    <AppLayout>
        <div>
            <h2 class="mt-4 text-2xl">About us</h2>
            <p>Text about us.</p>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/App.vue"
import { Head } from "@inertiajs/inertia-vue3"

export default {
    components: {
        Head, AppLayout
    }
}
</script>
