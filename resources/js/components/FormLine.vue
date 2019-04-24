<template>
    <div v-bind:id="'line-' + lId" class="row mt-2 mb-2 border-top">
        <div class="col-md-6 mt-1">
            <label v-bind:for="'fname' + lId" class="col-form-label">Prénom :</label>
            <input v-bind:id="'fname' + lId" v-bind:name="'lines[]'" type="text" class="form-control" />
        </div>

        <div class="col-md-6 mt-1">
            <label v-bind:for="'age' + lId" class="col-form-label">Age :</label>
            <input v-bind:id="'age' + lId" v-bind:name="'lines[]'" type="text" class="form-control" />
        </div>

        <div class="col-md-6">
            <label v-bind:for="'category' + lId" class="col-form-label mt-1">Sélectionnez un équipement : </label>
            <select @change="updateEquipmentsSelection($event)" v-bind:id="'category' + lId" v-bind:name="'lines[]'"
                    class="col-lg-4 form-control">
                <option disabled value="0" selected>--</option>
                <option v-for="category in categories" v-bind:value="category.id">{{ category.label }}</option>
            </select>
        </div>

        <div v-if="categoryIsSelected" class="col-md-6">

            <label v-bind:for="'equipment' + lId" class="col-form-label mt-1">Taille (en cm) :</label>
            <select v-bind:id="'equipment' + lId" v-bind:name="'lines[]'" class="col-lg-4 form-control">
                <option v-for="equipment in correspondingEquipments" v-bind:aria-valuemax="equipment.id">{{ equipment.size }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormLine",
        props: {
            lId: String | Number,
            categories: Array | Object,
            equipments: Array | Object,
        },
        data() {
            return {
                categoryIsSelected: false,
                selectedCategory: '',
                correspondingEquipments: [], // Will be updated according to the selected category
            }
        },
        methods: {
            updateEquipmentsSelection(ev) {
                if (isNaN(ev.target.value)) return console.warn("It's not a number. Isn't it ?");

                let catId = parseInt(ev.target.value, 10),
                    equip = this.equipments;

                this.correspondingEquipments = [];
                this.categoryIsSelected = true;

                for (let id in this.equipments)
                {
                    if (equip[id].categoryId === catId)
                    {
                        this.correspondingEquipments.push(equip[id]);
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
