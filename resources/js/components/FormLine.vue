<template>
    <div class="row mt-2 mb-2 border-top">
        <div class="col-md-6 mt-1">
            <label v-bind:for="'line-' + lineId" class="col-form-label">Nom et prénom</label>
            <input v-bind:id="'line-' + lineId" type="text" class="form-control" />
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormLine",
        props: {
            lineId: String|Number
        }
    }
</script>

<style scoped>

</style>
