<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="داشبورد" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">داشبورد</h2>
        </template>

        <div class="py-12" id="app">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <a  class="btn btn-outline-primary" :href="LoanLink">درخواست وام</a>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
const LoanLink = '/loan';
</script>
