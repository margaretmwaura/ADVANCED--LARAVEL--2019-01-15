<template>
    <div class="container">
        <p>This is the data of the blog and {{blog}}</p>
        <form class = "form-horizontal">
            <div class = "form-group">
                <label for = "Title" class="col-sm-2 control-label">Ttile</label>
                <div class = "col-sm-10">
                    <input type = "text" class="form-control" id ="title" v-model="title">
                </div>
            </div>
            <div class = "form-group">
                <label for = "Message" class ="col-sm-2 control-label">Message</label>
                <div class = "col-sm-10">
                    <input type = "text" class ="form-control" id ="message" v-model="message">
                </div>
            </div>
            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-default">Edit a blog</button>
                </div>s
            </div>
        </form>


    </div>
</template>

<script>
    export default {
        name: "Edit_bllog",
       data()
       {
           return{
               blog: ' ',
               title: ' ',
               message: ' '
           }
       },
        created()
        {
            this.blog = this.$route.params.blog;
            this.title = this.$route.params.blog.title;
            this.message = tthis.$route.params.blog.message;
        }

    }
</script>

<style scoped>

</style>
