<template>
    <div id="app" class="container">
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
                    <button type = "submit" class = "btn btn-default">Create Blog</button>
                </div>
            </div>
        </form>

        <div class="container">
            <p>This is are all the blogs</p>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Date posted</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr v-for="item in blogs" :key="item.id">
                    <td>{{item.title}}</td>
                    <td>{{item.message}}</td>
                    <td>{{item.date}}</td>
                    <td><BUTTON>Edit</BUTTON></td>
                    <td><BUTTON v-on:click="deleteitem(item.id)">Delete</BUTTON></td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "app",
        data()
        {
            return{
                title : ' ',
                message : ' ',
                blogs : []
            }
        },
        methods :
            {
                postdata()
                {
                    console.log("What is going to the database " + this.title + " " + this.message);
                    axios.post('http://mgcytonn.ga/writeups',[this.title,this.message])
                        .then(response => {
                            console.log("Getting movies was a success + the response " + response.data);
                            this.getdata()

                        })
                        .catch(error =>
                        {

                        })
                },
                getdata()
                {
                    axios.get('http://mgcytonn.ga/writeups')
                        .then(response => {
                            console.log("Getting movies was a success + the response " + response.data);
                            this.blogs = response.data

                        })
                        .catch(error =>
                        {

                        })
                },
                deleteitem(id)
                {
                    console.log(id);
                    axios.delete('http://mgcytonn.ga/writeups/' + id)
                        .then(response => {
                            console.log("Getting movies was a success + the response " + response.data);
                            this.blog = response.data;
                             this.getdata()
                        })
                        .catch(error =>
                        {

                        })
                },
            },
        mounted: function () {
            this.getdata()
        }
    }
</script>
<style lang="scss">
    #app {
        &_rou
        {
            width: 100%;
            height: 100px;
            background-color: indianred;

            &_inner
            {
                padding-top: 50px;
                text-align: center;

                #thing
                {
                    color: indigo;
                    margin-right: 50px;
                    text-decoration: none;

                }
                #thingt
                {
                    color: indigo;
                    margin-right: 50px;
                    text-decoration: none;
                }
                #thingtt
                {
                    color: indigo;
                    margin-right: 50px;
                    text-decoration: none;
                }
                #thingttt
                {
                    color: indigo;
                    margin-right: 50px;
                    text-decoration: none;
                }
            }
        }
    }
</style>

