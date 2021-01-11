<template>
    <div class="container">
        <h1 class="mb-4">Authors</h1>

        <div v-if="loading" class="alert alert-primary" role="alert">
            <strong>Loading...</strong>
        </div>

        <div v-else class="row">
            <div
                class="col-md-3 mb-5"
                v-for="author in authors"
                :key="author.id"
            >
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ author.name }}</h5>
                        <p class="card-text">
                            {{ author.description }}
                        </p>
                        <router-link
                            :to="`/authors/${author.id}`"
                            class="btn btn-primary"
                            >View Books</router-link
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from "vuex";

export default {
    data() {
        return {
            loading: true
        };
    },

    computed: {
        authors() {
            return this.$store.getters["author/getAll"];
        }
    },

    created() {
        this.$store.dispatch("author/fetchAll").then(() => {
            this.loading = false;
        });
    }
};
</script>
