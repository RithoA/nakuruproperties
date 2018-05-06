<template>
  <div class="media-body">
  <textarea class="form-control" name="comment" required v-model="comment" placeholder="Write something..." rows="1"></textarea>
  <div class="media-footer">
  <button class="btn btn-primary btn-wd pull-right" @click="saveNewComment">Post Comment</button>
  </div>
  </div>
</template>

<script>
  import axios from 'axios';

  export default {
  props: ['post'],
    data() {
      return {
        comment: ''
      }
    },

    methods: {
      saveNewComment() {
        var url = window.Laravel.basePath + 'api/post/comment'
        var postData = {
          comment: this.comment,
          post_id: this.post
        };

        axios.post(url, postData).then(response => {
          window.eventBus.$emit('commentAddedEvent', response.data);
          this.comment = '';
        });
      }
    }
  }
</script>