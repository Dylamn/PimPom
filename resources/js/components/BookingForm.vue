<template>
    <div>
        <div class="row">
            <div class="col-xl-6 form-group">
                <label for="nomClient" class="col-form-label text-md-right mr-5">
                    Nom du client :
                </label>
                <input type="text" name="nomClient" id="nomClient" class="col-lg-4 form-control d-inline ml-10"
                       required />
            </div>
            <div class="col-xl-6 form-group">
                <label for="nbPersonnes" class="pr-4 col-form-label text-md-right mr-5">
                    Nombre de personne(s) :
                </label>
                <select id="nbPersonnes" name="nbPersonnes" @change="createLine($event)"
                        class="ml-1 col-lg-4 form-control d-inline">
                    <option disabled value="0" selected>--</option>
                    <option v-for="nb in maxNumber" v-bind:value="nb">{{ nb }}</option>
                </select>
            </div>
        </div>

        <LightPick></LightPick>

        <div id="rents">
            <form-line v-bind:line-id="nb" v-for="nb in actual" :key="nb"></form-line>
        </div>
    </div>
</template>

<script>
    import LightPick from "./LightPick";
    import FormLine from "./FormLine";

    export default {
        name: "RentForm",
        components: { FormLine, LightPick },

        data() {
            return {
                maxNumber: 10,
                actual: 0,
                root: null,
                hasDecrease: false,
                remember: [],
            }
        },

        methods: {
            createLine(ev) {
                if (isNaN(ev.target.value)) return console.warn("It's not a number. Isn't it ?");

                let next = parseInt(ev.target.value, 10);

                if (next < this.actual) { // Then we'll push the elements who's going to dissapear in the remember array
                    this.hasDecrease = true;
                    this.rememberLines(this.actual - next);
                }

                this.actual = next;
            },

            rememberLines(number) {
                let lastChild = this.root.lastChild;

                for (let i = 0; i < number; i++)
                {
                    this.remember.push(lastChild);

                    lastChild = lastChild.previousSibling;
                }

                console.log('Lines to push in remember : ', number);
            },
        },

        mounted() {
            this.root = document.getElementById('rents');
        }
    }
</script>

<style scoped>

</style>
