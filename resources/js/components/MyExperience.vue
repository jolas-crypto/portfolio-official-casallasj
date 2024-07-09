<template>
    <div class="bg-customSection">
        <div class="container mx-auto py-16">
            <h1 class="text-4xl font-bold mb-8 text-center">My Experience</h1>
            <nav class="flex justify-center bg-customPurple rounded-2xl">
                <a
                v-for="(tab, index) in tabs"
                :key="index"
                :class="getTabButtonClasses(index)"
                @click="activeTab = index"
                >
                {{ tab }}
                </a>
            </nav>
            <section class="drop-shadow-xl rounded-md">
                <section class="py-3 space-y-5">
                    <div v-if="activeTab == 'all'">
                        <All></All>
                    </div>
                    <div v-if="activeTab == 'webDeveloper'">
                        <WebDeveloper></WebDeveloper>
                    </div>
                    <div v-if="activeTab == 'instructor'">
                        <Instructor></Instructor>
                    </div>
                    <div v-if="activeTab == 'technician'">
                        <Technician></Technician>
                    </div>
                    <div v-if="activeTab == 'collectorInvestigator'">
                        <CollectionInvestigation></CollectionInvestigation>
                    </div>
                    <div v-if="activeTab == 'studentAssistant'">
                        <StudentAssistant></StudentAssistant>
                    </div>
                    <div v-if="activeTab == 'canteen'">
                        <Canteen></Canteen>
                    </div>
                </section>
            </section>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import All from './experience/All.vue';
import WebDeveloper from './experience/WebDeveloper.vue';
import Instructor from './experience/Instructor.vue';
import Technician from './experience/Technician.vue';
import CollectionInvestigation from './experience/CollectionInvestigation.vue';
import StudentAssistant from './experience/StudentAssistant.vue';
import Canteen from './experience/Canteen.vue';

const activeTab = ref('all');

const tabs = ref({
    all: 'All',
    webDeveloper: 'Web Developer',
    instructor: 'Part Time Instructor',
    technician: 'Hardware Technician',
    collectorInvestigator: 'Collector Investigation',
    studentAssistant: 'Student Assistant',
    canteen: 'Canteen Helper/Manager',
});

const getTabButtonClasses = (tab) => {
    return [
        "px-6 py-2 text-white font-bold",
        activeTab.value === tab
        ? "bg-purple-500 rounded-full"
        : "hover:bg-purple-600 hover:rounded-full",
    ];
}
</script>
