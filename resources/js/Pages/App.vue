<script setup>
  import { ref } from 'vue';
  import NewCar from '@/Components/newCar.vue';
  import newRent from '@/Components/newRent.vue';
  import showRents from '@/Components/showRents.vue';
  import axios from 'axios';
  
  const autok = ref([]);
  const kolcsonzesek = ref([]);

  const reciveData = async (data) => {
    autok.value.push(data);
    try {
      const response = await axios.post('/api/car/save',{
        'modell':
      });
    } catch (error) {
      
    }
  }
  const reciveDataFromRents = (data) => {
    kolcsonzesek.value.push(data);
  }
  const megjelenit = ref(false);
</script>

<template>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <button class="btn btn-info" @click="megjelenit = !megjelenit">Autó hozzáadása</button>
        <NewCar v-if="megjelenit"
          @mentes="reciveData"
        />
      </div>
      <div class="col-6">
        <newRent
          @mentes="reciveDataFromRents"
          :autok="autok"
        />
      </div>
    </div>
    <div class="row">
      <showRents
        :kolcsonzesek="kolcsonzesek"
      />
    </div>
  </div>
</template>

<style scoped>
</style>
