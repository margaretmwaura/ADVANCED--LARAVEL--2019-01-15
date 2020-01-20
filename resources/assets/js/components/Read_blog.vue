<template>
    <div class="container">
        <p>This is the read component</p>
        <div v-for="item in blogs" :key="item.id">
            <Ablog :blog="item"> </Ablog>

        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import Ablog from "./Ablog";
    export default {
        name: "Read_blog",
        data()
        {
            return {
                blogs : []
            }
        },
        components : {
            Ablog
        },
       methods :
           {
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
               }
           },
        mounted: function () {
            this.getdata()
        }
    }
</script>

<style scoped>

</style>
