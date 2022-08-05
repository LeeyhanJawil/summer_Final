<template>
     <div class="col-lg-9">
                        <h4>Leeyhan Zyra Jawil</h4>
                        <div class="button-list mt-4 mb-3">
                            <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i><h4> Call Now </h4></button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="p-1">Contact No. :</th>
                                        <td class="p-1">09763542163</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-1">Address :</th>
                                        <td class="p-1">Banlasan, Tubigon, Bohol</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-1">Email :</th>
                                        <td class="p-1">leeyhanjawil@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>