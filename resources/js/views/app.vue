<template>
    <div>
        <app-header />

        <router-view></router-view>
    </div>
</template>
<script>
import appHeader from "./components/appHeader";

export default {
    computed: {},
    components: {
        appHeader
    }
};
</script>
