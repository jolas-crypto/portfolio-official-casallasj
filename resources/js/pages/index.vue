<template>
    <Header></Header>
    <SubHeader
    ></SubHeader>
    <section id="experience" class="transition-section shadow">
        <MyExperience
        ></MyExperience>
    </section>
    <section id="project" class="transition-section shadow">
        <PersonalProject
        ></PersonalProject>
    </section>
    <section id="education">
        <MyEducation
        ></MyEducation>
    </section>
    <section id="skill">
        <Skill
        ></Skill>
    </section>
</template>

<script setup>
    import Header from './Header.vue';
    import SubHeader from '../components/SubHeader.vue'
    import PersonalProject from '../components/PersonalProject.vue';
    import MyEducation from '../components/MyEducation.vue';
    import Skill from '../components/Skill.vue';
    import MyExperience from '../components/MyExperience.vue';
</script>
