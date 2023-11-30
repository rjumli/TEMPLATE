<script>
import { layoutComputed } from "@/State/helpers";
import Vertical from "./Vertical.vue";

export default {
    props: ['auth'],
    components: { Vertical },
    data() {
        return {};
    },
    computed: {
        ...layoutComputed,
    },
    mounted() {
        // document.querySelector("html").setAttribute('dir', 'rtl');
    }
};
</script>

<template>
    <div>
        <Vertical :auth="auth">
            <slot />
        </Vertical>
    </div>
</template>
