<template>
    <span>
        <a href="#" class="text-danger" v-if="isFavorited" @click.prevent="unFavorite(post)">
            <i class="material-icons">favorite</i>
        </a>
        <a href="#" class="text-danger" v-else @click.prevent="favorite(post)">
            <i class="material-icons">favorite_border</i>
        </a>  
    </span>
</template>

<script>
    export default {
        props: ['post', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(post) {
                axios.post('/favorite/'+post)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(post) {
                axios.post('/unfavorite/'+post)
                    .then(response => this.isFavorited = false) 
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>