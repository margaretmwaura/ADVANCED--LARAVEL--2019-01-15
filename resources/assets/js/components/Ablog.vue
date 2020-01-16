<template>
    <div>
       <p>{{blog}}</p>
        <button v-bind:id="blog.id" v-on:click="deleteitem">Deleting a Record {{blog.id}} </button>
        <button v-bind:id="blog.id" v-on:click="editablog">Edit a blog </button>
    </div>



</template>

<script>
    import axios from "axios";

    export default {
        name: "Ablog",
        props: {
            blog: Array,
        },
        methods :
            {
                deleteitem()
                {
                    axios.delete('http://todoapp.appp/writeups/' + this.blog.id)
                        .then(response => {
                            console.log("Getting movies was a success + the response " + response.data);
                            this.blogs = response.data

                        })
                        .catch(error =>
                        {

                        })
                }
            },
    }
</script>

<style scoped>

</style>
