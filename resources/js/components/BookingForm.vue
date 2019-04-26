<template>
    <div>
        <div class="row">
            <div class="col-xl-6 form-group">
                <label for="nomClient" class="col-form-label text-md-right mr-5">
                    Nom du client :
                </label>
                <input type="text" name="nomClient" id="nomClient" class="col-lg-4 form-control d-inline ml-10" required />
            </div>
            <div class="col-xl-6 form-group">
                <label for="nbPersonnes" class="pr-4 col-form-label text-md-right mr-5">
                    Nombre de personne(s) :
                </label>
                <select id="nbPersonnes" name="nbPersonnes" @change="createLine($event)"
                        class="ml-1 col-lg-4 form-control d-inline">
                    <option disabled value="0" selected>--</option>
                    <option v-for="nb in maxNumber" :key="nb" v-bind:value="nb">{{ nb }}</option>
                </select>
            </div>
        </div>

        <LightPick></LightPick>

        <div id="rents">
            <form-line v-for="nb in actual" :key="nb" v-bind:l-id="nb" v-bind:categories="categories"
                       v-bind:equipments="equipments">
            </form-line>
        </div>
    </div>
</template>

<script>
    import LightPick from "./LightPick";
    import FormLine from "./FormLine";

    export default {
        name: "RentForm",
        components: {FormLine, LightPick},

        data() {
            return {
                maxNumber: 10,
                actual: 0,
                categories: [],
                equipments: [],
            }
        },
        props: {
            category_url: String,
            equipment_url: String,
        },

        methods: {
            createLine(ev) {
                if (isNaN(ev.target.value)) return console.warn("It's not a number. Isn't it ?");

                let next = parseInt(ev.target.value, 10);

                this.actual = next;
            },
        },

        mounted() {
            const _this = this;

            axios.get(this.category_url)
                .then(function (response) {
                    _this.categories = response.data;
                });

            axios.get(this.equipment_url)
                .then(function (response) {
                    _this.equipments = response.data;
                });
        }
    }
</script>

<style scoped>

</style>
