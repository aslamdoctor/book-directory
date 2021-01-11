<template>
    <div class="container">
        <h1 class="mb-4">Publishers</h1>

        <div v-if="loading" class="alert alert-primary" role="alert">
            <strong>Loading...</strong>
        </div>

        <div v-else class="row">
            <div
                class="col-md-3 mb-5"
                v-for="publisher in publishers"
                :key="publisher.id"
            >
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ publisher.name }}</h5>
                        <p class="card-text">
                            {{ publisher.description }}
                        </p>
                        <router-link
                            :to="`/publishers/${publisher.id}`"
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
        publishers() {
            return this.$store.getters["publisher/getAll"];
        }
    },

    created() {
        this.$store.dispatch("publisher/fetchAll").then(() => {
            this.loading = false;
        });
    }
};
</script>
