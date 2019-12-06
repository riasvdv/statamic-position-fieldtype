<template>
    <i :class="['text-grey-90 position-icon position-icon-'+value]" :title="value" />
</template>

<script>
    export default {
        mixins: [IndexFieldtype],
    }
</script>
