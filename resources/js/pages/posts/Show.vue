<template>
    <div>
        <h1>Pagina show vue</h1>
        <h3>{{ post.title }}</h3>
        <h3>{{ post.description }}</h3>
    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            post: [],
        };
    },
    methods: {
        postAxios() {
            window.axios
                .get("/api/post/" + this.$route.params.id)
                .then((resp) => {
                    this.post = resp.data;
                });
        },
    },

    mounted() {
        this.postAxios();
    },
};
</script>

<style></style>
