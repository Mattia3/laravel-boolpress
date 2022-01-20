<template>
    <div class="container p-0">
        <h1 class="text-center my-4">Tutti i post</h1>
        <div class="row row-cols-3 text-center">
            <div class="col my-4 p-0" v-for="(post, i) in arrayPost" :key="i">
                <h3>Titolo: {{ post.title }} <br /></h3>
                <h3>Descrizione: {{ post.description }}<br /></h3>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            arrayPost: [],
        };
    },

    mounted() {
        window.axios.get("/api/post").then((resp) => {
            this.arrayPost = resp.data;
        });
    },
};
</script>

<style></style>
