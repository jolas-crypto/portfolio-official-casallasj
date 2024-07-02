<template>
    <div class="bg-customPurple">
        <div class="container mx-auto py-16">
            <h1 class="text-4xl font-bold mb-8 text-center">My Projects</h1>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                <div class="bg-customPurpleSection rounded-md">
                    <div class="image-container">
                        <img src="/images/rrap.jpg" class="image-container-sub">
                    </div>
                </div>
                <div class="bg-customPurpleSection rounded-md">
                    <div class="image-container">
                        <img src="/images/userapi.jpg" class="image-container-sub">
                    </div>
                </div>
                <div class="bg-customPurpleSection rounded-md">
                    <div class="image-container">
                        <img src="/images/rdms.jpg" class="image-container-sub">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
</script>
