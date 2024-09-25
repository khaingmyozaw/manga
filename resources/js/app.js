import $ from "jquery";
window.$ = $;

const flatpickr = require('flatpickr');

import flatpickr from "flatpickr";

$('#dob').flatpickr(
    {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    }
);