<template lang="html">
    <div id="app">
        <div class="container-scroller">
            <app-header/>
            <div class="container-fluid page-body-wrapper">
                <app-sidebar/>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <router-view></router-view>
                    </div>
                    <!-- content wrapper ends -->
                    <app-footer/>
                </div>
                <!-- main panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
</template>

<script lang="js">
    import AppHeader from './components/AppHeader';
    import AppSidebar from './components/AppSidebar';
    import AppFooter from './components/AppFooter';

    export default{
        name: 'App',
        components: {
            AppHeader,
            AppSidebar,
            AppFooter
        }
    }
</script>

<style>
    @import "../../node_modules/mdi/css/materialdesignicons.min.css";
    @import "../../node_modules/flag-icon-css/css/flag-icon.min.css";
    @import "../../node_modules/font-awesome/css/font-awesome.min.css";
</style>

<style lang="scss">
    @import "../../assets/scss/style.scss";
</style>
