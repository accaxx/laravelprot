<template>
    <div id="app">
        <div class="container">
            <h1>マイページ</h1>
            <ul class="nav">
                <li class="nav-item">
                    <router-link to="/" active-class="isActive" exact>
                        トップ
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/recruits/suggested" active-class="isActive">
                        紹介中の求人案件
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/recruits/considering" active-class="isActive">
                        検討中リスト ({{ considerationList.length }})
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/recruits/screening" active-class="isActive">
                        選考中の求人案件
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/profile" active-class="isActive">
                        プロフィール
                    </router-link>
                </li>
            </ul>
            <router-view></router-view>
            <modal v-if="showModal" />
        </div>
    </div>
</template>

<script>
    import 'normalize.css';
    import { includes } from 'lodash';
    import { mapGetters, mapMutations } from 'vuex';

    export default {
        name: 'App',
        components: {
            Modal,
        },
        computed: {
            ...mapGetters({
                showModal: 'showModal',
                list: 'list',
                considerationList: 'considerationList',
            }),
        filteredList() {
            return this.list.filter(item =>
            includes(this.considerationList, item.id),
        );
        },
    },
    methods: {
    ...mapMutations({
            CONSIDER_LIST_LOADED,
        }),
    },
    mounted() {
        const loadedList = JSON.parse(localStorage.getItem('mp_demo_vue')) || [];
        this.CONSIDER_LIST_LOADED(loadedList);
    },
    };
</script>

<style lang="scss">
    @import '../sass/variables.scss';
</style>