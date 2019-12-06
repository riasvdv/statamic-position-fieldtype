<template>
    <div class="btn-group">
        <button
                v-for="label in options"
                v-if="config[label]"
                :class="['btn-flat mr-1', label === value ? 'bg-blue text-white' : 'text-grey-90']"
                :title="label"
                @click="update(label)"
        ><i :class="['position-icon position-icon-'+label]" /></button>
    </div>
</template>
<script>
    export default {
        mixins: [Fieldtype],

        computed: {
            options: function () {
                return [
                    'left',
                    'center',
                    'right',
                    'full',
                    'drop-left',
                    'drop-right',
                ]
            }
        },
    }
</script>
