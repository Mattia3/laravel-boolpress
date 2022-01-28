<template>
    <div>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <router-link class="navbar-brand" to="/home">Home</router-link>
                <router-link class="navbar-brand" to="/about"
                    >About</router-link
                >
                <router-link class="navbar-brand" to="/contact"
                    >Contact</router-link
                >
            </div>
        </nav>

        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {};
    },
};
</script>

<style></style>
