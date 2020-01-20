<template>
    <div>
       <p>{{blog.title}}</p>
        <p>{{blog.message}}</p>
        <button v-bind:id="blog.id" v-on:click="deleteitem(blog.id)">Deleting a Record {{blog.id}} </button>
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
        data()
        {
            return{

            }
        },
        methods :
            {
                deleteitem(id)
                {
                    console.log(id);
                    axios.delete('http://todoapp.appp/writeups/' + id)
                        .then(response => {
                            console.log("Getting movies was a success + the response " + response.data);
                            this.blog = response.data

                        })
                        .catch(error =>
                        {

                        })
                },
                editablog()
                {
                    console.log("What I am passing " + this.blog.title + " " + this.blog.message);
                    this.$router.push({
                        path: 'Edit',
                        props: {
                            blog: Array,
                        },
                    });
                }
            },

    }
</script>

<style scoped>

</style>
