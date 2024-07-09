<template>
    <div class="bg-customPurple">
        <div class="container mx-auto py-16">
            <h1 class="text-4xl font-bold mb-8 text-center">My Projects</h1>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                <div class="bg-customPurpleSection rounded-md">
                    <div class="image-container">
                        <img src="/images/rrap.jpg" class="image-container-sub">
                        <div class="absolute bottom-0 left-0 bg-transparent bg-opacity-50 text-black text-lg font-bold p-2">
                            <a href="">Post Management System</a>
                        </div>
                    </div>
                </div>
                <div class="bg-customPurpleSection rounded-md">
                    <div class="image-container">
                        <img src="/images/payroll_system.jpg" class="image-container-sub">
                        <div class="absolute bottom-0 left-0 bg-transparent bg-opacity-50 text-black text-lg font-bold p-2">
                            <div class="border border-purple-500 rounded-xl hover:border-purple-100">
                                <div class="p-4 space-y-2">
                                    <a href="https://github.com/jolas-crypto/payroll-system" target="_blank">Payroll System</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
</script>
