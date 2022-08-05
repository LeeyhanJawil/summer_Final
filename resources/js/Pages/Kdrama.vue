<template>
    <h1>My Drama</h1>
    <hr>

    <div class="d-flex justify-content-between" >
        <div class="card mb-3" v-for="kdrama in kdramas" :key="kdrama.id" id="bg">
            <div class="card-header bg-info">
                <h4>Title: {{ kdrama.title }}</h4>
                <h6>Episodes: {{ kdrama.episodes }}</h6>
            </div>
            <div class="card-body">
                <h6>Kdrama Details</h6>
                <ul v-for="kdrama_detail in kdrama.kdrama_details" :key="kdrama_detail.id">
                    
                       Director: {{ kdrama_detail.director }}<br><hr> Cast: {{ kdrama_detail.cast }}<br><hr> Genre: {{ kdrama_detail.genre }}<br><hr> Year: {{ kdrama_detail.year }}
                    
                </ul>
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
        kdramas: Array
    }
}
</script>


<style scoped>
.card {
    width: 375px;
}
#bg {
            background-image: url('./images/logo.png');
            background: cover;
            background-size: 375px;
            background-repeat: no-repeat;
}
</style>