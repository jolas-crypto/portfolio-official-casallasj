<template>
    <!-- sticky top-0 z-50 -->
    <header class="bg-customPurple px-4 py-6 sticky top-0 z-50">
        <nav class=" flex justify-between items-center mx-auto">
            <div class="flex items-center">
                <div v-if="!isMenuOpen">
                    <h1 class="text-2xl font-bold">Jolas Casallas</h1>
                </div>
            </div>
            <div class="nav-links md:static absolute md:min-h-fit left-0 md:items-start md:w-auto px-4 bg-customPurple top-0 w-full py-4" :class="{'block': isMenuOpen, 'hidden': !isMenuOpen, 'md:flex': true}">
                <ul class="flex md:flex-row flex-col md:items-start md:gap-[4vw] md:space-y-0 space-y-3">
                    <li><a href="#experience" @click.prevent="scrollTo('experience')" class="header-class">Experience</a></li>
                    <li><a href="#project" @click.prevent="scrollTo('project')" class="header-class">Project</a></li>
                    <li><a href="#education" @click.prevent="scrollTo('education')" class="header-class">Education</a></li>
                    <li><a href="#skill" @click.prevent="scrollTo('skill')" class="header-class">Skill</a></li>
                </ul>
            </div>
            <div class="flex items-center space-x-3">
                <span v-if="!isMenuOpen" class="text-lg">casallasjolas28@gmail.com</span>
                <button @click="toggleMenu" class="md:hidden p-1 rounded focus:outline-none focus:ring z-20">
                    <svg ref="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg ref="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const isMenuOpen = ref(false);
const menuIcon = ref(null);
const closeIcon = ref(null);

const scrollTo = (sectionId) => {
    const element = document.getElementById(sectionId);
    if (element) {
        window.scrollTo({
            top: element.offsetTop - 60,
            behavior: 'smooth',
        });
        isMenuOpen.value = false; // Close menu after clicking a link
        menuIcon.value.classList.remove('hidden');
        closeIcon.value.classList.add('hidden');
    }
}

const toggleMenu = () => {
    const navLinks = document.querySelector('.nav-links')

    isMenuOpen.value = !isMenuOpen.value;

    navLinks.classList.toggle('top-0')

    if (isMenuOpen.value) {
        menuIcon.value.classList.add('hidden');
        closeIcon.value.classList.remove('hidden');
        closeIcon.value.setAttribute('name', 'close-icon'); // Set the 'name' attribute
    } else {
        menuIcon.value.classList.remove('hidden');
        closeIcon.value.classList.add('hidden');
        menuIcon.value.setAttribute('name', 'menu-icon'); // Set the 'name' attribute
    }
}

onMounted(() => {
    closeIcon.value.classList.add('hidden');
})
</script>