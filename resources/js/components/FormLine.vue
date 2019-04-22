<template>
    <div v-bind:id="'line-' + lineId" class="row mt-2 mb-2 border-top">
        <div class="col-md-6 mt-1">
            <label v-bind:for="'fname' + lineId" class="col-form-label">Prénom</label>
            <input v-bind:id="'fname' + lineId" v-bind:name="'lines[]'" type="text" class="form-control" />

            <label v-bind:for="'equip' + lineId" class="col-form-label mt-1">Sélectionnez un équipement : </label>
            <select v-bind:id="'equip' + lineId" v-bind:name="'lines[]'" class="col-lg-4 form-control">
                <option value="2">Ski</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormLine",
        props: {
            lineId: String|Number
        },
        data() {
            return {
                equipments: []
            }
        },

        mounted() {
            const _this = this;

            axios.get('/api/equipments')
                .then(function (response) {
                    _this.equipments.push(response.data.comment);
                });

            // console.log('Line ' + this.lineId + ' mounted');
        }
    }
</script>

<style scoped>

</style>
