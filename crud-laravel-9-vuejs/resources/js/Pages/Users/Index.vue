<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'
    

    const props = defineProps({
        users: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    function destroy(id) {
        if (confirm("Are you sure you want to Delete")) {
            form.delete(route('users.destroy', id));
        }
    }
    </script>

    <template>

      <Head title="Users" />

    <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    CRUD de Usuarios
                </h2>
            </template>

            <div class="py-12 min-h-screen  dark:bg-gray-900 ">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- <div
                        v-if="$page.props.flash.message"
                        class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert"
                    >
                        <span class="font-medium">
                            {{ $page.props.flash.message }}
                        </span>
                    </div> -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                           <div class="mb-2">
                                <Link :href="route('users.create')">
                                    <BreezeButton>Registrar Usuario</BreezeButton></Link
                                >
                            </div>
                             <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg"
                            >
                                <table
                                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                                >
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                    >
                                        <tr>
                                            <th scope="col" class="px-6 py-3">#</th>
                                            <th scope="col" class="px-6 py-3">
                                                Nombre
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Correo
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Domicilio
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha de Nacimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Ciudad
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Editar
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Eliminar
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="user in users"
                                            :key="user.id"
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        >
                                            <th
                                                scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                            >
                                                {{ user.id }}
                                            </th>
                                            <th
                                                scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                            >
                                                {{ user.name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ user.email }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ user.address }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ user.birthdate }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ user.city }}
                                            </td>


                                            <td class="px-6 py-4">
                                                <Link
                                                    :href="
                                                        route(
                                                            'users.edit',
                                                            user.id
                                                        )
                                                    "
                                                   class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Editar</Link
                                                >
                                            </td>
                                            <td class="px-6 py-4">
                                                <BreezeButton
                                                    class="bg-red-700"
                                                    @click="destroy(user.id)"
                                                >
                                                    Eliminar
                                                </BreezeButton>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </BreezeAuthenticatedLayout>
    </template>

<style >
body{
    margin: 0; 
  padding: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background-color: #182a3f;
  min-height: 100vh;
  
  
}
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background-color: #182a3f;
  min-height: 100vh;
}


.content{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  gap: 30px 30px;
  width: 80%;
  margin: 0 auto;
}
.content-characters{
  background: #002128;
  padding: 1rem;
  border-radius: 1rem;
}
.content-characters:hover {
    background: #1b1b1b;
}
.character {
  display: flex;
  justify-content: center;
  align-items: center;
}
.info-character{
  display: table-column;
  justify-content: center;
  margin: 0 auto;
}
img.logo{
  width: 70%;
}
img {
  height: 50%;
  width: 50%;
  border-radius: 1rem;
}
h1 {
  color: #00ff97;
}
h2 {
  font-weight: bold;
  font-size: 1.2rem;
  padding: 1rem;
  background: #234b94;
  border-radius: 0.8rem;
  margin: 1rem;
}
h4 {
  margin: 1rem;
  color: #ffffff;
  background: #8b8b8b;
  border-radius: 0.4rem;
  font-weight: inherit;
  padding: 0.2rem;
}
input{
  text-align: center;
  background: #002128;
  outline: none;
  border: 0;
  width: 300px;
  margin: 1rem;
  padding: 1rem;
  color: white;
  font-weight: 700;
  border-radius: 1rem;
}
@media screen and (max-width: 918px) {
.content {
  grid-template-columns: 1fr 1fr;
}
.character {
  display: flex;
  align-items: center;
}
h2{
  font-size: 1rem;
}
}
@media screen and (max-width: 540px) {
.content {
  width: 90%;
  grid-template-columns: 1fr;
}
.character {
  display: flex;
  align-items: center;
}
}
</style>