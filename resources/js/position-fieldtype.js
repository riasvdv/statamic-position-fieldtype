import PositionFieldtype from "./PositionFieldtype";
import PositionFieldtypeIndex from "./PositionFieldtypeIndex";

Statamic.booting(() => {
    Statamic.component('position-fieldtype', PositionFieldtype);
    Statamic.component('position-fieldtype-index', PositionFieldtypeIndex);
});
