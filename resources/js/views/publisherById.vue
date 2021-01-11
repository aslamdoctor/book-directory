<template>
    <div class="container">
        <div v-if="loading" class="alert alert-primary" role="alert">
            <strong>Loading...</strong>
        </div>

        <div v-else>
            <h1>{{ publisher.name }}</h1>

            <p>
                {{ publisher.description }}
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
        publisher() {
            return this.$store.getters["publisher/getSingle"];
        }
    },

    created() {
        this.$store
            .dispatch("publisher/fetchSingle", this.$route.params.id)
            .then(() => {
                this.loading = false;
            });
    }
};
</script>
