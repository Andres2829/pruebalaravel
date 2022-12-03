<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        apis: {
            type: Object,
            default: () => ({}),
        },
    });

    const form = useForm({
        id: props.apis.id,
        name: props.apis.name,
        image: props.apis.image,
        species: props.apis.species,
        status: props.apis.status,
    });


   
    </script>

    <template>
        <Head title="User Edit" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Detalles Del Personaje
                </h2>
            </template>

            <div class="min-h-screen  dark:bg-gray-900">
                <div class="contentt">
                    <div class="content-characters">
                    <div class="character">
                    <img :src="form.image" alt="">
                    <div class="info-character">
                    <h2> {{ form.id}}</h2>
                    <h2> {{ form.name}}</h2>
                    <h4> {{ form.species}}</h4>
                    <h4> {{ form.status}}</h4>
                    <button>
                        <Link :href="route('apis.index')"
                        class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Salir</Link>    
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
  background: #081119;
  background-image: url("");
  
}
.contentt{
  display: flex;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  gap: 30px 30px;
  width: 80%;
  margin: 0 auto;
}
.content-characters{
  background: #297789;
  padding: 1rem;
  border-radius: 3rem;
  margin: 0 auto;
  text-align: center;
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
  background: #38b0cb;
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