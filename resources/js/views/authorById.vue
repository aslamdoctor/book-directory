<template>
    <div class="container">
        <div v-if="loading" class="alert alert-primary" role="alert">
            <strong>Loading...</strong>
        </div>

        <div v-else>
            <h1>{{ author.name }}</h1>

            <p>
                {{ author.description }}
            </p>
        </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
    data() {
        return {
            loading: true
        };
    },

    computed: {
        author() {
            return this.$store.getters["author/getSingle"];
        }
    },

    created() {
        this.$store
            .dispatch("author/fetchSingle", this.$route.params.id)
            .then(() => {
                this.loading = false;
            });
    }
};
</script>
