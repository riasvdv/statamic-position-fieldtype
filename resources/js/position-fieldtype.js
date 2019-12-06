Statamic.booting(() => {
    Statamic.component('position-fieldtype', require('./PositionFieldtype.vue'));
    Statamic.component('position-fieldtype-index', require('./PositionFieldtypeIndex.vue'));
});
