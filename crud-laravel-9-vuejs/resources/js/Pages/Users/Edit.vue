<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        user: {
            type: Object,
            default: () => ({}),
        },
    });

    const form = useForm({
        id: props.user.id,
        name: props.user.name,
        email: props.user.email,
        address: props.user.address,
        birthdate: props.user.birthdate,
        city: props.user.city,
    });


    const submit = () => {
        form.put(route("users.update", props.user.id));
    };
    </script>

    <template>
        <Head title="User Edit" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Editar Usuario
                </h2>
            </template>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form @submit.prevent="submit">
                                <div class="mb-6">
                                    <label
                                        for="Name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Nombre</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.name"
                                        name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.name"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.name }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="Email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Correo Electronico</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.email"
                                        name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.email"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.email }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="address"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Domicilio</label
                                    >
                                    <textarea
                                        type="text"
                                        v-model="form.address"
                                        name="address"
                                        id=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    ></textarea>

                                    <div
                                        v-if="form.errors.address"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.address }}
                                    </div>
                                </div>


                                <div class="mb-6">
                                    <label
                                        for="birthdate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Fecha de Nacimiento</label
                                    >
                                    <input
                                        type="date"
                                        v-model="form.birthdate"
                                        name="birthdate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.birthdate"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.birthdate }}
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label
                                        for="city"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Ciudad</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.city"
                                        name="city"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.city"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.city }}
                                    </div>
                                </div>



                                <button
                                    type="submit"
                                    class="text-white bg-blue-700  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                    :disabled="form.processing"
                                    :class="{ 'opacity-25': form.processing }"
                                >
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </BreezeAuthenticatedLayout>
    </template>