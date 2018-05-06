<template>
                                    <div class="main main-raisedlist">
                                    <div class="profile-content">
                                    <div class="container-fluid">
                                    <div class="row collections" style="padding-top: 50px">
                                    <div class="col-md-6 col-lg-4" v-for="post in posts">
                                    <div class="card card-blog card-atv">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <div class="atvImg">
                                                <img class="img" :src="post.coverimage" />
                                            </div>
                                        </a>
                                        <div class="card-icon">
                                                 <i class="material-icons">play_circle_outline</i>
                                            </div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="#pablo">{{post.title}}</a>
                                        </h4>
                                        <div class="footer">
                                            <div class="author">
                                                <a href="#pablo">
                                                   <img :src="post.user.avatar" alt="..." class="avatar img-raised">
                                                   <span>{{ post.user.username }}</span>
                                                </a>
                                            </div>
                                           <div class="stats">
                                             <a style="color: gray"><i class="material-icons">schedule</i>5 min ago</a> &middot;
                                             <like :id="post.id"></like> &middot;
                                             <a href="#pablo" class="text-purple"><i class="material-icons">chat_bubble</i> 45</a> &middot;
                                             <a href="#pablo" class="text-info"><i class="material-icons">share</i> 45</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div> 
                                    </div>
                                    </div>
                                    </div>

</template>

<script>

    import Like from './Like.vue'

    export default {
        mounted() {
            this.get_feed()
        },
        components: {
            Like
        },
        methods: {
            get_feed() {
                axios.get('/feed')
                    .then( (response) => {
                        console.log(response.data)
                        response.data.forEach( (post) => {
                            this.$store.commit('add_post', post)
                        })
                    })
            }
        },

        computed: {
            posts() {
                return this.$store.getters.all_posts
            }
        }
    }
</script>