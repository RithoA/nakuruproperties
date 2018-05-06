<template>
  <div>
    <div v-for="comment in comments" v-bind:key="comment.id">
      <comment :user_id="comment.user.id" :id="comment.id" :comment="comment"></comment>
    </div>
  </div>
</template>

<script>
  import Commentsadd from './Commentsadd.vue';
  import Comments from './Comments.vue';

  export default {
  props: ['post'],
  
    components: {
      Commentsadd, Comments
    },

    created() {
      window.eventBus.$on('commentAddedEvent', comment => this.handleNewCommentAdded(comment));
      window.eventBus.$on('commentDeletedEvent', comment => this.handleCommentDeleted(comment));
      this.loadComments();
    },

    data() {
      return {
        comments: []
      }
    },

    methods: {
      handleNewCommentAdded(comment) {
        this.comments.unshift(comment);
      },
      handleCommentDeleted(comment) {
        this.comments.shift(comment);
        this.loadComments();
      },
       loadComments() {
        var url = window.Laravel.basePath + 'api/get/comments';
        var postData = {
          post_id: this.post
        };
        axios.post(url, postData).then(response => {
          this.comments = response.data;
        })
      }
    }
  }
</script>