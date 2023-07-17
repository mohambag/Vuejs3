<template>
    <div id="app">

        <p>
            <router-link active-class="router-link-active" to="/">Go to Home</router-link>
            <router-link active-class="router-link-active" to="/user">Go to Users</router-link>
            <router-link active-class="router-link-active" to="/post">Go to Posts</router-link>
        </p>
        <router-view></router-view>

        <hr>

        <div><h2>this is test</h2></div>
        <!--        <SampleFirst v-bind:user-name="name" v-bind:user-lastname="lastname" v-bind:user-age="age"/>-->
        <SampleFirst v-bind:user-info="userInfo"/>
        <sampleEmit @childData="showData($event)"/>
        <sampleProvidInject/>
        <sampleSlot>
            <template v-slot:ui>
                <ui>
                    <li v-for="(item,index) in lists" :key="index">{{ item }}</li>
                </ui>
            </template>

            <template v-slot:div>
                <div>
                    <h1>salam</h1>
                </div>
            </template>
        </sampleSlot>


        <ul>
            <li v-for="(item,index) in userNames" :key="index">{{ item }}</li>
        </ul>
        <sampleMixins/>

        <hr>
        <teleport to="#teleport-target">
            <div>salam khobi teleport</div>
        </teleport>

        <composition-reactivity/>

        <sample-composable/>

        <sample-computed-watch/>

        <sample-props-in-setup v-bind:name="namePro"/>

        <hr>
        <sample-setup-provid-inject/>

        <hr>

        <sample-setup-life-cycle/>

    </div>
</template>

<script>
import SampleFirst from './components/SampleFirst.vue';
import sampleEmit from './components/sampleEmit.vue';
import sampleProvidInject from "./components/sampleProvidInject.vue";
import sampleSlot from "./components/sampleSlot.vue";
import sampleMixins from "@/components/sampleMixins";
import {userNames} from "@/mixins";

//***** compositon Api
import compositionReactivity from "@/components/compositionReactivity";

//****** composable
import sampleComposable from "@/components/sampleComposable";

//****** computed  and watch and watchEffect
import sampleComputedWatch from "@/components/sampleComputedWatch";
import SamplePropsInSetup from "@/components/samplePropsInSetup";
import {ref, provide} from "vue";
import SampleSetupProvidInject from "@/components/sampleSetupProvidInject";
import SampleSetupLifeCycle from "@/components/sampleSetupLifeCycle";


export default {


    mixins: [userNames],
    components: {
        SampleSetupLifeCycle,
        SampleSetupProvidInject,
        SamplePropsInSetup,
        sampleEmit,
        SampleFirst,
        sampleProvidInject,
        sampleSlot,
        sampleMixins,
        compositionReactivity,
        sampleComposable,
        sampleComputedWatch


    }, data() {
        return {
            userInfo: {
                name: "ali",
                lastname: "bagri",
                age: 30
            },
            lists: ['ali', 'javad', 'reza'],
            userNames: ['rezaaa', 'aliiiii'],

        }
    },
    methods: {
        showData(event) {
            console.log(event)
        }
    },
    provide: {
        name: "javaddd",
        email: 'javadiiiiii'
    },
    setup() {
        const namePro = ref('just for test Provide');
        provide('namePro', namePro.value);

    }
}
</script>

<style>
.marginClass{
    margin-right: 5px;
}
.router-link-active{
 color: green;
}
</style>
