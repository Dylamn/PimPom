<template>
    <div v-bind:id="'line-' + lId" class="row mt-2 mb-2 border-top">
        <div class="col-md-6 mt-1">
            <label v-bind:for="'fname' + lId" class="col-form-label">Prénom</label>
            <input v-bind:id="'fname' + lId" v-bind:name="'lines[]'" type="text" class="form-control" />

            <label v-bind:for="'equip' + lId" class="col-form-label mt-1">Sélectionnez un équipement : </label>
            <select v-bind:id="'equip' + lId" v-bind:name="'lines[]'" class="col-lg-4 form-control">
                <option disabled value="0" selected>--</option>
                <option v-for="category in categories" v-bind:value="category.id">{{ category.label }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormLine",
        props: {
            lId: String|Number,
            categories: Array|Object
        },
        data() {
            return {

            }
        },
    }
</script>

<style scoped>

</style>
