<template>
    <transition name="fade">
        <form v-if="show" name="delete_form" v-bind:action="action" method="POST">
            <input type="hidden" name="_method" v-bind:value="method"/>
            <input type="hidden" name="_token" v-bind:value="csrf"/>
            <i v-on:click="triggerDelete()" class="fa fa-times btn-delete"> </i>
        </form>
    </transition>
</template>

<script>
    import { depluralize } from "../utils";

    export default {
        name: "DeleteForm",
        data() {
            return {
                show: false
            }
        },
        props: {
            csrf: String,
            method: String,
            action: String,
        },
        methods: {
            triggerDelete() {
                let form = this.$vnode.elm,
                    tab = depluralize(form.action.split('/')[3]),
                    adj = tab === ('catégorie' || 'réservation') ? 'cette' : 'cet';
                console.log(tab, adj);

                let $continue = confirm(`Voulez vous vraiment supprimer ${adj} ${tab} ?`);

                if ($continue) {
                    form.submit();
                }
            }
        },
        mounted() {
            this.show = true;
        }
    }
</script>

<style scoped>
    i:hover {
        cursor: pointer;
    }

    .btn-delete {
        color: #F00;
        font-size: 1.4em;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity: 0;
    }
</style>
