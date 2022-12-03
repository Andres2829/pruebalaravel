<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        apis: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    
    </script>

    <template>

      <Head title="Users" />

      <BreezeAuthenticatedLayout>
            <template #header>
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">
                        API de Rick and Morty 
                    </h2>
                
            </template>

            <div class="min-h-screen  dark:bg-gray-900">
                <div class="content">
                    <div class="content-characters" 
                    v-for="api in apis" 
                    :key="api.id">
                    <div class="character">
                    <img :src="api.image" alt="">
                    <div class="info-character">
                    <h2> {{ api.id}}</h2>
                    <h2> {{ api.name}}</h2>
                    <button>
                        <Link :href="route('apis.edit',api.id)"
                        class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Detalles</Link>
                        
                    </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        </BreezeAuthenticatedLayout>
    </template>

<style >
body{
  background: #000000;
  background-image: url("");
  
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


