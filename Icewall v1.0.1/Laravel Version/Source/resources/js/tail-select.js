import tail from "tail.select";

(function (cash) {
    "use strict";

    // Tail Select
    cash(".tail-select").each(function () {
        let options = {};

        if (cash(this).data("placeholder")) {
            options.placeholder = cash(this).data("placeholder");
        }

        if (cash(this).attr("class") !== undefined) {
            options.classNames = cash(this).attr("class");
        }

        if (cash(this).data("search")) {
            options.search = true;
        }

        if (cash(this).attr("multiple") !== undefined) {
            options.descriptions = true;
            options.hideSelected = true;
            options.hideDisabled = true;
            options.multiLimit = 15;
            options.multiShowCount = false;
            options.multiContainer = true;
        }

        tail(this, options);
    });
})(cash);
