Vue.component('position-fieldtype', {

    mixins: [Fieldtype],

    template: `
        <div class="btn-group">
            <button 
                v-for="(label, visible) in options"
                v-if="visible" 
                :class="['btn btn-default', label === data ? 'active' : '']"
                :title="label"
                @click="data = label"
            ><i :class="['position-icon position-icon-'+label]"></i></button>
        </div>
    `,

    computed: {
        options: function () {
            return Object.assign({
                'left': true,
                'center': true,
                'right': true,
                'full': true,
                'drop-left': true,
                'drop-right': true,
            }, this.config.options || []);
        }
    },
});
