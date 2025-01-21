<script setup>
    import { ref } from 'vue';
    const props = defineProps(
        {
            kolcsonzesek:{type:Array,required:true}
        }
    );
</script>

<template>
    <div class="card p-3 mt-3" v-for="(kolcsonzes,index) in kolcsonzesek">
        <h5>{{ index+1 }}.{{ kolcsonzes.auto }}</h5>
        <span>Kezdete: {{ kolcsonzes.kezdete }}</span>
        <span>Vége: {{ kolcsonzes.vege }}</span>
        <hr>
        <h6>Contact information</h6>
        <span>{{ kolcsonzes.email }}</span>
    </div>
</template>

<style scoped>
</style>
