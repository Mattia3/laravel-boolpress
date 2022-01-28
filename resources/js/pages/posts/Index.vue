<template>
    <div class="container p-0">
        <h1 class="text-center my-4">Tutti i post</h1>
        <div class="row">
            <div class="col-8 text-center">
                <div
                    class="col my-4 p-0"
                    v-for="(post, i) in arrayPost"
                    :key="i"
                >
                    <router-link :to="{ name: 'show', params: { id: post.id } }"
                        ><h3>Titolo: {{ post.title }} <br /></h3>
                    </router-link>
                    <h3>Descrizione: {{ post.description }}<br /></h3>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-5">
            <button
                class="btn btn-success mr-3 page-link"
                @click="pagination(currentPage + 1)"
            >
                avanti
            </button>
            <button
                class="btn btn-primary"
                @click="pagination(currentPage - 1)"
            >
                indietro
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            arrayPost: [],
            currentPage: 1,
            categoriesList: [],
        };
    },

    methods: {
        pagination(page = 1) {
            window.axios.get("/api/post?page=" + page).then((resp) => {
                this.arrayPost = resp.data.data;
                this.currentPage = resp.data.current_page;
            });
        },

        categories() {
            window.axios.get("/api/categories").then((resp) => {
                this.categoriesList = resp.data;
            });
        },
    },

    mounted() {
        this.pagination();
        this.categories();
    },
};
</script>
