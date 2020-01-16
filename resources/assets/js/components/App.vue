<template>
    <div id="app">
        <div id="app_rou">
            <div id="app_rou_inner">
                <router-link to="/create" id="thing">Create Movie</router-link>
                <router-link to="/edit" id="thingt"> Edit Movie </router-link>
                <router-link to="/read" id="thingtt"> Read Movie </router-link>
            </div>

        </div>

        <slot> </slot>
    </div>
</template>

<script>
    export default {
        name: 'app',
        components:
            {

            },
        data (){
            return {

            }
        },
        methods: {
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

