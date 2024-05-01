<template>
    <div>
<!--    Rasalina Header content details goes here    -->
        <Header />
<!--    Rasalina Main content details goes here    -->
        <Main />
<!--    Rasalina Footer content details goes here    -->
        <Footer />
    </div>
</template>

<script>
import Header from '@/Components/Header.vue';
import Main from '@/Components/Main.vue';
import Footer from '@/Components/Footer.vue';
import 'frontend/assets/css/bootstrap.min.css';
import 'frontend/assets/css/animate.min.css';
import 'frontend/assets/css/magnific-popup.css';
import 'frontend/assets/css/fontawesome-all.min.css';
import 'frontend/assets/css/slick.css';
import 'frontend/assets/css/default.css';
import 'frontend/assets/css/style.css';
import 'frontend/assets/css/responsive.css';

export default {
    components: {
        Main,
        Footer,
        Header
    }
}
</script>

<style scoped>
/* Component-specific styles go here */
</style>
