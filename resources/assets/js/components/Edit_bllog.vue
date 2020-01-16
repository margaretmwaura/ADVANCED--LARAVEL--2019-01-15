<template>
    <div class="container">
        <form class = "form-horizontal" v-on:submit.prevent="postdata">
            <div class = "form-group">
                <label for = "Title" class = "col-sm-2 control-label">First Name</label>
                <div class = "col-sm-10">
                    <input type = "text" class = "form-control" id ="title" placeholder = "Enter your title" v-model="title">
                </div>
            </div>
            <div class = "form-group">
                <label for = "Message" class = "col-sm-2 control-label">Last Name</label>
                <div class = "col-sm-10">
                    <input type = "text" class = "form-control" id ="message" placeholder = "Enter your blog details" v-model="message">
                </div>
            </div>
            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-default">Sign in</button>
                </div>
            </div>
        </form>

    </div>
</template>

<script>
    export default {
        name: "Edit_bllog"
    }
</script>

<style scoped>

</style>
