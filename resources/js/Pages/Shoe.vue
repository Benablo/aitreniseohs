<template>
    
<h1>Akong Sapatos</h1>
<hr>
<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="shoe in shoes" :key="shoe.id">
        <div class="card-header bg-danger">
            <h4>{{shoe.brand}}</h4>
        </div>
        <div class="card-body">
            <h5>{{shoe.name}}</h5>
            <h5>{{shoe.color}}</h5>
            <h3>{{shoe.size}}</h3>
            <h5>{{shoe.prize}}</h5>

        </div>
    </div>
</div>

</template>


<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        shoes: Array
    }
}
</script>

<style scoped>
.card {
    width: 375%;
}
</style>