<template>
    <div class="sidebar-sub-menu" v-if="nav.items && nav.isExactActive">
        <div class="sidebar-sub-menu-header">
            <h2 class="mb-0 fs-22 fw-500">{{nav.name}}</h2>
        </div>

        <div class="sidebar-sub-menu-body">
            <ul class="sidebar-sub-menu-nav">
                <li v-for="(item,i) in nav.items" :key="i" class="nav-item" :class="[item.isActive && 'active', item.group && 'nav-item-group', item.hr && 'nav-item-hr']">

                    <!--  class="nav-item-group" -->

                    <template v-if="item.group">
                        <span class="nav-item nav-label" v-if="item.group.name">{{ item.group.name }}</span>
                        <ul class="sidebar-sub-menu-nav">
                             <li v-for="(sub,n) in item.group.items" :key="n" class="nav-item" :class="sub.isActive && 'active'">
                                <a :href="sub.path" class="nav-link">
                                    <div class="nav-link-text">{{ sub.name }}</div>
                                </a>
                             </li>
                        </ul>
                    </template>

                    <hr v-else-if="item.hr">

                    <a :href="item.path" class="nav-link" v-else>
                        <div class="nav-link-text">{{ item.name }}</div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: ['nav']
}
</script>

<style>

</style>
