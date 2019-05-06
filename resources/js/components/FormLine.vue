<template>
    <!--Name section -->
    <div v-bind:id="'line-' + lId" class="row mt-2 mb-2 border-top">
        <div class="col-md-6 mt-1">
            <label v-bind:for="'fname' + lId" class="col-form-label">Prénom :</label>
            <input v-bind:id="'fname' + lId" v-bind:name="`lines[${lId}][fname]`" type="text" class="form-control" />
        </div>

        <!-- Age section -->
        <div class="col-md-6 mt-1">
            <label v-bind:for="'age' + lId" class="col-form-label">Age :</label>
            <input v-bind:id="'age' + lId" v-bind:name="`lines[${lId}][age]`" type="text" class="form-control" />
        </div>

        <!-- Category section -->
        <div class="col-md-6">
            <label v-bind:for="'category' + lId" class="col-form-label mt-1">Sélectionnez un équipement : </label>
            <select @change="showEquipments($event)" :id="'category' + lId" :name="`lines[${lId}][category]`"
                    class="col-lg-4 form-control">
                <option disabled value="0" selected>--</option>
                <option v-for="category in categories" :key="category.id" v-bind:value="category.id">
                    {{ category.label }}
                </option>
            </select>
        </div>

        <!-- Size section -->
        <div v-if="categoryIsSelected" class="col-md-6">
            <label v-bind:for="'equipment' + lId" class="col-form-label mt-1">Taille (en cm) :</label>
            <select v-bind:id="'equipment' + lId" v-bind:name="`lines[${lId}][equipment]`" @change="updateList($event)"
                    class="col-lg-4 form-control">
                <option v-if="selectedEquipment !== null" :value="selectedEquipment.id" selected>
                    {{ selectedEquipment.size }}
                </option>
                <option v-for="equipment in correspondingEquipments" :key="equipment.id" v-bind:value="equipment.id">
                    {{ equipment.size }}
                </option>
            </select>

            <!-- Test -->
            <button @click="commitToStore" class="btn btn-outline-success" type="button">Interact</button>
            <div>Count from store : {{ count }}</div>
        </div>
    </div>
</template>

<script>
    import { mapActions, mapGetters, mapMutations } from 'vuex';

    export default {
        name: "FormLine",
        props: {
            lId: String | Number,
        },
        data () {
            return {
                categoryIsSelected: false,
                selectedCategory: null,
                selectedEquipment: null,
                equipmentPosition: null,
                correspondingEquipments: [], // Will be updated according to the selected category
            }
        },
        computed: {
            ...mapGetters({
                getCorrespondingEquipments: "correspondingEquipments",
                categories: "getCategories",
                count: "getCount",
            }),
        },
        methods: {
            ...mapMutations({
                fromSelectedToAvailable: "fromSelectedToAvailable",
                switchToSelected: "switchToSelected",
            }),

            ...mapActions({
                increment: "incrementASync"
            }),
            commitToStore () {
                this.increment(5);
            },
            /**
             * Show the select and update it for the size accordingly to the selectedCategory
             */
            showEquipments (ev) {
                if (isNaN(ev.target.value)) return console.warn("It's not a number. Isn't it ?");

                this.selectedCategory = parseInt(ev.target.value, 10);
                this.categoryIsSelected = true;

                this.correspondingEquipments = this.getCorrespondingEquipments(this.selectedCategory);

                this.updateList();
            },

            /**
             * Will update the correspondingEquipments array based on the selectedEquipment,
             * in order to avoid duplication in the lists.
             */
            updateList (ev = null) {
                if (ev === null) {
                    this.selectedEquipment = this.correspondingEquipments[0];
                } else {
                    this.$_restore();

                    this.selectedEquipment = this.correspondingEquipments.find(function (elm) {
                        return elm.id === parseInt(ev.target.value, 10);
                    });
                }

                this.equipmentPosition = this.$_removeFromList();
            },

            /**
             * Remove the selectedEquipment in the array correspondingEquipments.
             */
            $_removeFromList () {
                let arr = this.correspondingEquipments;

                for (let i = 0, l = arr.length; i < l; i++) {
                    if (arr[i] === this.selectedEquipment) {
                        arr.splice(i, 1);

                        return i; // i will be used to correctly put back the selectedEquipment in the array
                    }
                }
            },

            /**
             * Put back the selectedEquipment in the array correspondingEquipments.
             */
            $_restore () {
                // this.$store.commit('fromSelectedToAvailable', this.selectedEquipment, %NEW%)
                this.correspondingEquipments.splice(this.equipmentPosition, 0, this.selectedEquipment);
            }
        },

        beforeMount () {

        }
    }
</script>

<style scoped>

</style>
