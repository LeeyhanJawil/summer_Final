<template>
    <h1>Home</h1>
    <div class="main">
        <div class="subcontainer">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://thebiem.com/wp-content/uploads/2019/03/Best_Romance_Korean_Dramas.jpg.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
const message = 'Hello world, inertia is under attack'
const number = ref(0)
function increment() {
    number.value++;
}
function decrement() {
    number.value--;
}
</script>


<script>
export default {
    layout: Layout
}
</script>