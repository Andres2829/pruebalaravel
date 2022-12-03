<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Prueba Laravel- Realizar un CRUD de Usuarios y consumo de API</h2>
        </template>

        <div class="py-12 min-h-screen  dark:bg-gray-900">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Realizar una plataforma en la cual se puedan registrar y logear usuarios, estos
usuarios deben poder tener acceso a la lista de información del API y el detalle de
los registros de la misma.
</h2>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

